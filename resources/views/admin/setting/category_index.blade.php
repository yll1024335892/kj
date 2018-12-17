<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 11:44
 * file: category_index.blade.php
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
    栏目管理
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <div class="text-c">
                    <input type="text" name="" id="" placeholder="栏目名称、id" style="width:250px" class="input-text">
                    <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
                </div>
            </div>
        </div>
        <div class="panel mt-20">
            <div class="panel-body">
                <div class="clearfix">
							<span class="f-l">
								<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
								<a class="btn btn-primary radius" onclick="system_category_add('添加栏目','{{route('category.create')}}','','500')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加栏目</a>
							</span>
                    <span class="f-r">共有数据：<strong>54</strong> 条</span>
                </div>

                <div class="mt-20 clearfix">
                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="80">ID</th>
                            <th width="80">排序</th>
                            <th>栏目名称</th>
                            <th width="100">操作</th>
                        </tr>
                        </thead>
                        @if($categoryList)
                        <tbody>
                        @foreach($categoryList as $category)
                        <tr class="text-c">
                            <td><input type="checkbox" name="id[]" value="{{$category['id']}}"></td>
                            <td>{{$category['id']}}</td>
                            <td>{{$category['sort']}}</td>
                            <td class="text-l"  @if($category['status']==0) style="color: #E8E9EC;"@endif>{{$category['fullname']}}</td>
                            <td class="f-14"><a title="编辑" href="javascript:;" onclick="system_category_edit('栏目编辑','{{route("category.edit",$category['id'])}}','','500')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="system_category_del(this,'{{route('category.destroy',$category['id'])}}')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
@section("script")
    <script type="text/javascript">
        function system_category_add(title,url,w,h){
            layer_show(title,url,w,h);
        }
        function system_category_del(obj,url){
            layer.confirm('栏目删除须谨慎，确认要删除吗？',function(index){
                $.post(url, {
                    "_token": "{{ csrf_token() }}",
                    "_method": "delete"
                }, function(data) {
                    if (data.status == 0) {
                        layer.msg(data.msg, { icon: 6});
                        location.href = "{{ url('category') }}";
                    } else {
                        layer.msg(data.msg, { icon: 5});
                    }
                });
            });
        }
        function system_category_edit(title,url,w,h){
            layer_show(title,url,w,h);
        }
    </script>
@endsection
