<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 11:44
 * file: log.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    系统管理
    <span class="c-gray en">/</span>
    系统日志
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body"发布>
                <div class="text-c"> 日期范围：
                    <input type="text" id="search-datetime-start" class="input-text datetimepicker-input" style="width:120px;">
                    -
                    <input type="text" id="search-datetime-end" class="input-text datetimepicker-input" style="width:120px;">
                    <input type="text" name="" id="" placeholder="日志名称" style="width:250px" class="input-text">
                    <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜日志</button>
                </div>
            </div>
        </div>

        <div class="panel mt-20">
            <div class="panel-body"发布>
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
							</span>
                    <span class="f-r">共有数据：<strong>54</strong> 条</span>
                </div>
                <div class="mt-10">
                    <table class="table table-border table-bordered table-bg table-hover table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="80">ID</th>
                            <th width="100">类型</th>
                            <th>内容</th>
                            <th width="17%">用户名</th>
                            <th width="120">客户端IP</th>
                            <th width="120">时间</th>
                            <th width="70">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-c">
                            <td><input type="checkbox" value="" name=""></td>
                            <td>15686</td>
                            <td>1</td>
                            <td>登录成功!</td>
                            <td>admin</td>
                            <td>61.233.7.80</td>
                            <td>2014-6-11 11:11:42</td>
                            <td>
                                <a title="详情" href="javascript:;" onclick="system_log_show(this,'10001')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe665;</i></a>
                                <a title="删除" href="javascript:;" onclick="system_log_del(this,'10001')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
