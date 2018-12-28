<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 13:47
 * file: role_show.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('styles')
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}" type="text/css"/>
@endsection
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    管理员管理
    <span class="c-gray en">/</span>
    角色管理
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="clearfix">
						<span class="f-l">
							<a href="javascript:;" onclick="" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
							<a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','{{route('role.create')}}','','500')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a>
						</span>
                </div>
                @if(!$roles->isEmpty())
                <div class="mt-20 clearfix">
                    <table class="table table-border table-bordered table-hover table-bg">
                        <thead>
                        <tr>
                            <th scope="col" colspan="6">角色管理</th>
                        </tr>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" value="" name=""></th>
                            <th width="40">ID</th>
                            <th width="200">角色名</th>
                            <th>权限列表</th>
                            <th width="300">描述</th>
                            <th width="70">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr class="text-c">
                                <td><input type="checkbox" value="" name=""></td>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->permissions()->pluck('name')->implode(' ') }}</td>
                                <td>{{ $role->descript }}</td>
                                <td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','{{route('role.edit',$role->id)}}','','500')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'{{route('role.destroy',$role->id)}}')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
                @endif
            </div>
        </div>
    </article>
@endsection
<script type="text/javascript">
    function admin_role_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function admin_role_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }

    function admin_role_del(obj,url){
        layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
            $.post(url, {
                "_token": "{{ csrf_token() }}",
                "_method": "delete"
            }, function(data) {
                if (data.status == 0) {
                    layer.msg(data.msg, { icon: 6});
                    location.href = "{{ url('role') }}";
                } else {
                    layer.msg(data.msg, { icon: 5});
                }
            });
        });
    }


</script>

