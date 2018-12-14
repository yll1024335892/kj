<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 12:48
 * file: member_dellist.blade.php
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
            <div class="panel-body"发布>
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
            <div class="panel-body"发布>
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
                            <th width="40">性别</th>
                            <th width="90">手机</th>
                            <th width="150">邮箱</th>
                            <th width="">地址</th>
                            <th width="130">加入时间</th>
                            <th width="70">状态</th>
                            <th width="100">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td>1</td>
                            <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','{{route('member.views')}}','10001','360','400')">张三</u></td>
                            <td>男</td>
                            <td>13000000000</td>
                            <td>admin@mail.com</td>
                            <td class="text-l">北京市 海淀区</td>
                            <td>2014-6-11 11:11:42</td>
                            <td class="td-status"><span class="label label-danger radius">已删除</span></td>
                            <td class="td-manage"><a style="text-decoration:none" href="javascript:;" onClick="member_huanyuan(this,'1')" title="还原"><i class="Hui-iconfont">&#xe66b;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
        function member_show(title,url,id,w,h){
            layer_show(title,url,w,h);
        }
        function member_huanyuan(obj,id){
            layer.confirm('确认要还原吗？',function(index){

                $(obj).remove();
                layer.msg('已还原!',{icon: 6,time:1000});
            });
        }
        function member_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        }
    </script>
@endsection