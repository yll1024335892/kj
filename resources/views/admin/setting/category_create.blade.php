<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/16
 * Time: 10:46
 * file: category-create.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="Hui-admin-page-container">
    <form action="{{route('category.store')}}" method="post" class="form form-horizontal" id="form-category-add">
        @csrf
        <div class="HuiTab">
            <div class="tabCon" style="display: block;">
                <div class="row clearfix">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>上级栏目：</label>
                    <div class="form-controls col-xs-8 col-sm-9"> <span class="select-box">
								<select class="select" id="sel_Sub" name="pid">
									<option value="0">顶级分类</option>
									<option value="10">分类一级</option>
									<option value="101">&nbsp;&nbsp;├ 分类二级</option>
									<option value="102">&nbsp;&nbsp;├ 分类二级</option>
									<option value="20">分类一级</option>
									<option value="200">&nbsp;&nbsp;├ 分类二级</option>
								</select>
								</span> </div>
                    <div class="col-3"> </div>
                </div>
                <div class="row clearfix">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
                    <div class="form-controls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" placeholder=""  name="name">
                    </div>
                    <div class="col-3"> </div>
                </div>
                <div class="row clearfix">
                    <label class="form-label col-xs-4 col-sm-3">显隐：</label>
                    <div class="form-controls col-xs-8 col-sm-9 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" value="1"  name="status">
                            <label for="radio-1">显示</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" value="0"  name="status">
                            <label for="radio-2">隐藏</label>
                        </div>
                    </div>
                    <div class="col-3"> </div>
                </div>
            </div>



        </div>
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
    </article>
</body>
</html>
