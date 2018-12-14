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
    <div id="loginform" class="loginBox">
        <h6 style="text-align: center; font-size: 16px; margin: 0px; padding: 0px;">管理系统</h6>
        <form class="form form-horizontal" action="index.html" method="post">
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="" name="" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="form-controls col-xs-8">
                    <input id="" name="" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
                    <img src="images/VerifyCode.aspx.png">
                    <a id="kanbuq" href="javascript:;">看不清，换一张</a>
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="online" id="online" value="">
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row clearfix">
                <div class="form-controls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
        <p style="text-align: center; font-size: 12px; margin-top: 20px; padding: 0px; color: #666;">@copyright 阿翼互联网有限公司</p>
    </div>
</div>
</body>
</html>
