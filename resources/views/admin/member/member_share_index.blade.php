<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 12:47
 * file: member_share_index.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    空白页面
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="text-c"> 日期范围：
                    <input type="text" id="search-datetime-start" class="input-text datetimepicker-input" style="width:120px;">
                    -
                    <input type="text" id="search-datetime-end" class="input-text datetimepicker-input" style="width:120px;">
                    <input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
                    <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
                </div>
            </div>
        </div>
        <div class="panel mt-20">
            <div class="panel-body">
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
							</span>
                    <span class="f-r">共有数据：<strong>88</strong> 条</span>
                </div>
                <div class="clearfix mt-20">
                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="80">ID</th>
                            <th width="100">用户名</th>
                            <th width="90">IP</th>
                            <th width="130">访问时间</th>
                            <th>URL</th>
                            <th width="60">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td>1</td>
                            <td>张三</td>
                            <td>192.168.0.2</td>
                            <td>2015.01.16 22:12:24</td>
                            <td class="text-l">http://www.h-ui,net/</td>
                            <td class="f-14"><a title="删除" href="javascript:;" onclick="share_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript">
        function share_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        }
    </script>
@endsection
