<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 16:00
 * file: role_create.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="clearfix pd-20">
    <form action="{{route('role.store')}}" method="post" class="form form-horizontal" id="form-admin-role-add">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">角色名称：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="text" class="input-text"  placeholder=""  name="name">
            </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">备注信息：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="text" class="input-text"  placeholder=""  name="descript">
            </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">权限名称：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                @foreach($permissionList as $permission)
                <label class="">
                    <input type="checkbox" value="{{$permission->id}}" name="permissions[]" id="user-Character-0-0-0">
                    {{$permission->name}}</label>
                @endforeach
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <a href="javascript:" onclick="role_create();" class="btn btn-success radius" >确定</a>
            </div>
        </div>
    </form>
</article>
@include("layouts.admin._footer")
<script type="text/javascript">
    function role_create()
    {
        $.post("{{ route('role.store') }}", $("form").serialize(), function(data) {
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);
        });
    }
</script>
</body>
</html>
