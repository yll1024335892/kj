<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 11:39
 * file: _meta.blade.php
 * email:yll1024335892@163.com
 */
?>
        <!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('hui/lib/html5.js') }}" defer></script>
    <script type="text/javascript" src="{{asset('hui/lib/respond.min.js')}}" defer></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('hui/static/h-ui/css/H-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('hui/static/h-ui.admin.pro/css/h-ui.admin.pro.min.css') }}"  />
    <link rel="stylesheet" type="text/css" href="{{ asset('hui/lib/Hui-iconfont/1.0.9/iconfont.css') }}"  defer/>
    <!--[if IE 6]>
    <script type="text/javascript" src="{{ asset('hui/lib/DD_belatedPNG_0.0.8a-min.js') }}" defer></script>
    <script>DD_belatedPNG.fix('*');</script><![endif]-->
