<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 15:34
 * file: permission_create.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="clearfix pd-20">
    <form action="{{route('permission.index')}}" method="post" class="form form-horizontal" id="form-admin-role-add">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">权限名：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="text" class="input-text"  placeholder=""  name="name">
            </div>
        </div>
        @if(!$roles->isEmpty())
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">管理者：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                @foreach ($roles as $role)
                    <label class="">
                        <input type="checkbox" value="{{$role['id']}}" name="roles[]">
                        {{$role['name']}}</label>
                @endforeach
            </div>
        </div>


        @endif
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
            </div>
        </div>
    </form>
</article>
</body>
</html>
