<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * 会员中心登陆的首页
     */
    public function  index(){
       $userInfo= Auth::user()->toArray();
        return view("user.index",compact("userInfo"));
    }

}
