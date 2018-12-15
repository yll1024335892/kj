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
    <div id="loginform" class="loginBox" style="height: 500px; margin-top: -270px;">
        <h6 style="text-align: center; font-size: 16px; margin: 0px; padding: 0px;">管理系统</h6>
        <form class="form form-horizontal" action="{{ route('register') }}" method="post">
            @csrf
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="name" name="name" type="text" required placeholder="@lang('language.Name')"  value="{{ old('name') }}"  class="input-text size-L">
                    @if ($errors->has('name'))
                        <label id="mobile-error" class="error" for="mobile" style="display: block;">{{ $errors->first('name') }}</label>
                    @endif
                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="email" name="email" value="{{ old('email') }}" required type="text" placeholder="@lang("language.E-Mail")" class="input-text size-L">
                    @if ($errors->has('email'))
                        <label id="mobile-error" class="error" for="mobile" style="display: block;">{{ $errors->first('email') }}</label>
                    @endif

                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="password" name="password" type="password" placeholder="@lang('language.Password')" class="input-text size-L">
                    @if ($errors->has('password'))
                        <label id="mobile-error" class="error" for="mobile" style="display: block;">{{ $errors->first('password') }}</label>
                    @endif
                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="password-confirm" name="password_confirmation" type="password" placeholder="@lang("language.ConfirmPassword")" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <div class="radio-box">
                        <input type="radio" value="1"  name="sex">
                        <label for="radio-1">男</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" value="0"  name="sex">
                        <label for="radio-2">女</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" value="2"  name="sex">
                        <label for="radio-2">保密</label>
                    </div>
                    @if ($errors->has('sex'))
                        <label id="mobile-error" class="error" for="mobile" style="display: block;">{{ $errors->first('sex') }}</label>
                    @endif
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" name="captcha" type="text" placeholder="验证码" onblur="if(this.value==''){this.placeholder='验证码'}" onclick="if(this.value=='验证码:'){this.value='';}" value="" style="width:150px;">
                    <img  src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码"/>
                    @if ($errors->has('captcha'))
                        <label id="mobile-error" class="error" for="mobile" style="display: block;">{{ $errors->first('captcha') }}</label>
                    @endif
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <a class="btn btn-success radius size-L" href="{{route("ayiadmin.login")}}">登录</a>
                    <button type="submit" class="btn btn-success radius size-L">
                        @lang("language.Register")
                    </button>
                    <a class="btn btn-success radius size-L" href="/">返回首页</a>
                </div>
            </div>
        </form>
        <p style="text-align: center; font-size: 12px; margin-top: 20px; padding: 0px; color: #666;">@copyright 阿翼互联网有限公司</p>
    </div>
</div>
</body>
</html>
