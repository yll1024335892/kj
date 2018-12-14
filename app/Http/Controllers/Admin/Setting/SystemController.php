<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    public  function  index(){
        $menuMark="system_index";//是否是当前menu选择
        $menuSelect="setting";
        return view("admin.setting.system_index",compact("menuMark","menuSelect"));
    }
}
