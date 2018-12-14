<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public  function  index(){
        $menuMark="log_index";//是否是当前menu选择
        $menuSelect="setting";
        return view("admin.setting.log_index",compact("menuMark","menuSelect"));
    }
}
