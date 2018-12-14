<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 14:18
 * file: member_change_psw.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="clearfix pd-20">
    <form action="/" method="post" class="form form-horizontal" id="form-change-password">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>账户：</label>
            <div class="form-controls col-xs-8 col-sm-9"> 张三 </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword" id="newpassword">
            </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword2" id="newpassword2">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>

</body>
</html>
