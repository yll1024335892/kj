<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/16
 * Time: 9:35
 * file: catagoryNew.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('styles')
    <link rel="stylesheet" href=" {{asset('hui/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css')}}" type="text/css">
@endsection
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    管理员管理
    <span class="c-gray en">/</span>
    权限管理
@endsection
@section('contain')
    <div class="Hui-admin-article">
        <article class="Hui-admin-content clearfix">
            <table class="table">
                <tr>
                    <td width="200" class="va-t"><ul id="treeDemo" class="ztree"></ul></td>
                    <td class="va-t"><iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100%  height=390px SRC="{{route('category.new.addview')}}"></iframe></td>
                </tr>
            </table>
        </article>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('hui/lib/laypage/1.2/laypage.js')}}"></script>
    <script type="text/javascript" src="{{asset('hui/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('hui/static/business/js/main.js')}}"></script>--}}
    <script type="text/javascript">
        var setting = {
            view: {
                dblClickExpand: false,
                showLine: false,
                selectedMulti: false
            },
            data: {
                simpleData: {
                    enable:true,
                    idKey: "id",
                    pIdKey: "pId",
                    rootPId: ""
                }
            },
            callback: {
                beforeClick: function(treeId, treeNode) {
                    var zTree = $.fn.zTree.getZTreeObj("tree");
                    if (treeNode.isParent) {
                        zTree.expandNode(treeNode);
                        return false;
                    } else {
                        $h=treeNode.id;
                        demoIframe.attr("src",treeNode.file);
                        return true;
                    }
                }
            }
        };
        var zNodes =[
            { id:1, pId:0, name:"一级分类",file:'', open:true},
            { id:11, pId:1, name:"二级分类",file:''},
            { id:111, pId:11, name:"三级分类",file:"xx.html"},
            { id:112, pId:11, name:"三级分类",file:''},
            { id:113, pId:11, name:"三级分类",file:''},
            { id:114, pId:11, name:"三级分类",file:''},
            { id:115, pId:11, name:"三级分类",file:''},
            { id:12, pId:1, name:"二级分类 1-2",file:''},
            { id:121, pId:12, name:"三级分类 1-2-1",file:''},
            { id:122, pId:12, name:"三级分类 1-2-2",file:''},
        ];
        $(document).ready(function(){
            var t = $("#treeDemo");
            t = $.fn.zTree.init(t, setting, zNodes);
            demoIframe = $("#testIframe");
           // demoIframe.bind("load", loadReady);
           // var zTree = $.fn.zTree.getZTreeObj("tree");
           // zTree.selectNode(zTree.getNodeByParam("id",'11'));
        });
    </script>
@endsection