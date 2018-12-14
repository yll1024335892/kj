<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 会员中心登陆的首页
     */
    public function  index(){
        echo "用户登录后的首页！";
    }

}
