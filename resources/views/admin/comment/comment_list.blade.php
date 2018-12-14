<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 18:06
 * file: comment_list.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    评论管理
    <span class="c-gray en">/</span>
    评论列表
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="text-c"> 日期范围：
                    <input type="text" id="search-datetime-start" class="input-text datetimepicker-input" style="width:120px;">
                    -
                    <input type="text" id="search-datetime-end" class="input-text datetimepicker-input" style="width:120px;">
                    <input type="text" class="input-text" style="width:250px" placeholder="输入关键词" id="" name="">
                    <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜意见</button>
                </div>
            </div>
        </div>
        <div class="panel mt-20">
            <div class="panel-body">
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
								<a href="javascript:;" onclick="datadel()" class="btn btn-success radius"><i class="Hui-iconfont">&#xe6a7;</i> 审核通过</a>
								<a href="javascript:;" onclick="datadel()" class="btn btn-secondary radius"><i class="Hui-iconfont">&#xe697;</i> 推荐评论</a>
								<a href="javascript:;" onclick="datadel()" class="btn btn-secondary radius"><i class="Hui-iconfont">&#xe72e;</i> 取消推荐</a>
							</span>
                    <span class="f-r l-30">共有数据：<strong>88</strong> 条</span>
                </div>
                <div class="clearfix mt-10">

                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="80">评论ID</th>
                            <th width="100">评论会员</th>
                            <th width="50">匿名</th>
                            <th width="150">评论对象</th>
                            <th>评论内容</th>
                            <th width="120">时间</th>
                            <th width="50">状态</th>
                            <th width="40">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td>00001</td>
                            <td class="va-t"><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')">
                                    <i class="avatar size-L radius"><img alt="" src="http://static.h-ui.net/h-ui/images/avatar-default-S.gif"></i>
                                    <br /><span class="text-primary">张三</span>
                                </a></td>
                            <td>否</td>
                            <td class="text-l va-t"><a href="#" target="_blank">文章内容<br>http://www.xxxxxx.net/aaaa.shtml</a></td>
                            <td class="text-l va-t">
                                留言内容
                            </td>
                            <td><time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time></td>
                            <td>待审核</td>
                            <td class="td-manage">
                                <ul>
                                    <li><a title="封id" href="javascript:;">封id</a></li>
                                    <li><a title="编辑" href="javascript:;">通过</a></li>
                                    <li><a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')">编辑</a></li>
                                    <li><a title="删除" href="javascript:;" onclick="member_del(this,'1')">删除</a></li>
                                </ul>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div id="laypage" class="text-c"></div>
            </div>
        </div>
    </article>
@endsection