<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 13:47
 * file: permission_show.blade.php
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
    权限管理
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="text-c">
                    <form class="Huiform" method="post" action="" target="_self">
                        <input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="" name="">
                        <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜权限节点</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel mt-20">
            <div class="panel-body">
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
								<a href="javascript:;" onclick="admin_permission_add('添加权限节点','{{route('permission.create')}}','','310')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加权限节点</a>
							</span>
                    <span class="f-r">共有数据：<strong>54</strong> 条</span>
                </div>
                <div class="mt-20 clearfix">
                    <table class="table table-border table-bordered table-bg table-hover table-sort">
                        <thead>
                        <tr>
                            <th scope="col" colspan="7">权限节点</th>
                        </tr>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="40">ID</th>
                            <th width="200">权限名称</th>
                            <th>字段名</th>
                            <th width="100">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!$permissionList->isEmpty())
                        @foreach($permissionList as $permission)
                        <tr class="text-c">
                            <td><input type="checkbox" value="1" name=""></td>
                            <td>{{$permission['id']}}</td>
                            <td>{{$permission['name']}}</td>
                            <td></td>
                            <td><a title="编辑" href="javascript:;" onclick="admin_permission_edit('角色编辑','{{route('permission.edit',$permission->id)}}','','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_permission_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr>
                        @endforeach
                        {{ $permissionList->links() }}
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </article>
@endsection
<script type="text/javascript">
    function admin_permission_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function admin_permission_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function admin_permission_del(obj,id){
        layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
</script>
