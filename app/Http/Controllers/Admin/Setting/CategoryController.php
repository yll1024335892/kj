<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public  function  index(){
        $menuMark="category_index";//是否是当前menu选择
        $menuSelect="setting";
        return view("admin.setting.category_index",compact("menuMark","menuSelect"));
    }
}
