<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public  function  store(UserRequest $request){
        $varifyData=\Cache::get($request->verification_key);
        if(!$varifyData){
            return $this->response->error('验证码已失效', 422);
        }
        if(!hash_equals($varifyData['code'],$request->verification_code)){
            //返回401
            return $this->response->errorUnauthorized("验证码错误");
        }
        User::create([
            'name'=>$request->name,
            'phone'=>$varifyData['phone'],
            'password'=>bcrypt($request->password),
            'sex'=>2,
            'isadmin'=>0
        ]);
        //清除验证码缓存
        \Cache::forget($request->verification_key);
        return $this->response->created();
    }
}
