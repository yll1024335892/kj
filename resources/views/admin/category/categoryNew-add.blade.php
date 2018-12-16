<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/16
 * Time: 9:42
 * file: categoryNew-add.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<div class="pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-user-add">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
            <div class="form-controls col-5">
                <input type="text" class="input-text" value="" placeholder="" id="user-name" name="product-category-name">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-2">备注：</label>
            <div class="form-controls col-5">
                <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,100)"></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row clearfix">
            <div class="col-9 col-offset-2">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</div>
</body>
</html>

