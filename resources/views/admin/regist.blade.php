<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 13:10
 * file: login.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
<link rel="stylesheet" type="text/css" href="{{ asset('hui/static/h-ui.admin.pro/css/H-ui.login.min.css') }}" />
</head>
<body>
<div class="loginWraper">
    <div id="loginform" class="loginBox" style="height: 430px; margin-top: -270px;">
        <h6 style="text-align: center; font-size: 16px; margin: 0px; padding: 0px;">管理系统</h6>
        <form class="form form-horizontal" action="index.html" method="post">
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="username" name="username" type="text" placeholder="邮箱" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="psw" name="psw" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="re-psw" name="psw_confirmation" type="password" placeholder="再次输入" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <div class="radio-box">
                        <input type="radio"  name="sex">
                        <label for="radio-1">男</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio"  name="sex">
                        <label for="radio-2">女</label>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.placeholder='验证码'}" onclick="if(this.value=='验证码:'){this.value='';}" value="" style="width:150px;">
                    <img  src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码"/>
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <a class="btn btn-success radius size-L" href="{{route("ayiadmin.login")}}">登录</a>
                    <a class="btn btn-success radius size-L" href="javascript:">注册</a>
                    <a class="btn btn-success radius size-L" href="/">返回首页</a>
                </div>
            </div>
        </form>
        <p style="text-align: center; font-size: 12px; margin-top: 20px; padding: 0px; color: #666;">@copyright 阿翼互联网有限公司</p>
    </div>
</div>
</body>
</html>
