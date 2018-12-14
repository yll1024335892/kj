<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 13:47
 * file: user_show.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    管理员管理
    <span class="c-gray en">/</span>
    管理员列表
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="text-c"> 日期范围：
                    <input type="text" id="search-datetime-start" class="input-text datetimepicker-input" style="width:120px;">
                    -
                    <input type="text" id="search-datetime-end" class="input-text datetimepicker-input" style="width:120px;">
                    <input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
                    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
                </div>
            </div>
        </div>

        <div class="panel mt-20">
            <div class="panel-body">
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
								<a href="javascript:;" onclick="admin_add('添加管理员','{{route('user.create')}}','','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a>
							</span>
                    <span class="f-r">共有数据：<strong>54</strong> 条</span>
                </div>
                <div class="mt-20 clearfix">
                    <table class="table table-border table-bordered table-bg table-hover table-sort">
                        <thead>
                        <tr>
                            <th scope="col" colspan="9">员工列表</th>
                        </tr>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="40">ID</th>
                            <th width="150">登录名</th>
                            <th width="90">手机</th>
                            <th width="150">邮箱</th>
                            <th>角色</th>
                            <th width="130">加入时间</th>
                            <th width="100">是否已启用</th>
                            <th width="100">操作</th>
                        </tr>
                        </thead>
                        @if(!$users->isEmpty())
                        <tbody>
                        @foreach($users as $user)
                        <tr class="text-c">
                            <td><input type="checkbox" value="{{ $user->id }}" name=""></td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>13000000000</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->pluck('name')->implode(';') }}</td>
                            <td>{{ $user->created_at}}</td>
                            <td class="td-status"><span class="label label-success radius">已启用</span></td>
                            <td class="td-manage"><a style="text-decoration:none" onClick="admin_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','{{ route('user.edit', $user->id) }}','','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_del(this,'{{route('user.destroy',$user->id)}}')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
<script type="text/javascript">
    function admin_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function admin_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function admin_del(obj,url){
        layer.confirm('确认要删除吗？',function(index){
            $.post(url, {
                "_token": "{{ csrf_token() }}",
                "_method": "delete"
            }, function(data) {
                if (data.status == 0) {
                    layer.msg(data.msg, { icon: 6});
                    location.href = "{{ url('user') }}";
                } else {
                    layer.msg(data.msg, { icon: 5});
                }
            });
        });
    }
</script>
