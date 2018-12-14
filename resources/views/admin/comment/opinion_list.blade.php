<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 18:57
 * file: opinion_list.blade.php
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
    意见反馈
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
                    <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span>
                    <span class="r">共有数据：<strong>88</strong> 条</span>
                </div>
                <div class="clearfix mt-20">
                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="60">ID</th>
                            <th width="60">用户名</th>
                            <th>留言内容</th>
                            <th width="100">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td>1</td>
                            <td><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="static/h-ui/images/ucenter/avatar-default-S.gif"></i></a></td>
                            <td class="text-l"><div class="c-999 f-12">
                                    <u style="cursor:pointer" class="text-primary" onclick="member_show('张三','{{route('member.views')}}','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
                                <div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
                                <div>留言内容</div></td>
                            <td class="td-manage"> <a title="删除" href="javascript:;" onclick="opinion_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
        function opinion_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        }
    </script>
@endsection