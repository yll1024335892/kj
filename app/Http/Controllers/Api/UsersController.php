<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserRequest;
use App\Models\User;
use App\Transformers\UserTransformer;
use  App\Models\Image;
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
       $user= User::create([
            'name'=>$request->name,
            'phone'=>$varifyData['phone'],
            'password'=>bcrypt($request->password),
            'sex'=>2,
            'isadmin'=>0
        ]);
        //清除验证码缓存
        \Cache::forget($request->verification_key);
        return $this->response->item($user, new UserTransformer())
            ->setMeta([
                'access_token' => \Auth::guard('api')->fromUser($user),
                'token_type' => 'Bearer',
                'expires_in' => \Auth::guard('api')->factory()->getTTL() * 60
            ])
            ->setStatusCode(201);
    }

    public function me(){
        return $this->response->item($this->user(),new UserTransformer())->setMeta([
            'access_token' => \Auth::guard('api')->fromUser($this->user()),
            'token_type' => 'Bearer',
            'expires_in' => \Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }

    public function update(UserRequest $request)
    {
        $user = $this->user();
        $attributes = $request->only(['name', 'email', 'introduction']);
        if ($request->avatar_image_id) {
            $image = Image::find($request->avatar_image_id);

            $attributes['avatar'] = $image->path;
        }
        $user->update($attributes);
        return $this->response->item($user, new UserTransformer());
    }
}
