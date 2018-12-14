<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * 会员的列表
     */
    public function index(){
        $menuMark="member_index";//是否是当前menu选择
        $menuSelect="member";
        return view("admin.member.member_index",compact("menuMark","menuSelect"));
    }

    /**
     * 软删除的会员列表
     */
    public function dellist(){
        $menuMark="member_dellist";//是否是当前menu选择
        $menuSelect="member";
        return view("admin.member.member_dellist",compact("menuMark","menuSelect"));
    }

    public function create(){
        return view("admin.member.member_create");
    }
    /**
     * 编辑会员
     * @param $id
     * @return
     */
    public function edit($id){
        return view("admin.member.member_edit");
    }

    /**
     * 修改会员的密码
     */
    public function  changepsw(){
        return view("admin.member.member_change_psw");
    }

    /**
     * 显示用户的信息
     */
    public function views(){
        return view("admin.member.member_view");
    }

    /**
     * 将软删除用户类别中还原
     */
    public function  reduction(){

    }

    /**
     * 彻底删除数据和软删除在这里处理
     */
    public function destroy(){

    }
}
