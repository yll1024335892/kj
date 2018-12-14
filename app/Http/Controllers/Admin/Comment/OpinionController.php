<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpinionController extends Controller
{
    public function list(){
        $menuMark="opinion_list";//是否是当前menu选择
        $menuSelect="comment";
        return view("admin.comment.opinion_list",compact("menuMark","menuSelect"));
    }
}
