<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 18:03
 * file: permission_edit.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="clearfix pd-20">
    <form action="{{route('permission.update',$permission->id)}}" method="post" class="form form-horizontal" id="form-admin-role-add">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">权限名：</label>
            <div class="form-controls col-xs-8 col-sm-9">

                <input type="text" class="input-text"  value="{{$permission->name}}" placeholder=""  name="name">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-success radius"><i class="icon-ok"></i> 确定</button>
            </div>
        </div>
    </form>
</article>
</body>
</html>

