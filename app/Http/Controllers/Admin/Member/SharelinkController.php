<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SharelinkController extends Controller
{
    public function index(){
        $menuMark="member_share_index";//是否是当前menu选择
        $menuSelect="member";
        return view("admin.member.member_share_index",compact("menuMark","menuSelect"));
    }
}
