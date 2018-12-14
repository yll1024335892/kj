<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     *
     */
   public function list(){
       $menuMark="comment_list";//是否是当前menu选择
       $menuSelect="comment";
       return view("admin.comment.comment_list",compact("menuMark","menuSelect"));
   }

}
