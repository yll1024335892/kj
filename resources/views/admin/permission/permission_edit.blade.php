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
    <form  class="form form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">权限名：</label>
            <div class="form-controls col-xs-8 col-sm-9">

                <input type="text" class="input-text"  value="{{$permission->name}}" placeholder=""  name="name">
            </div>
        </div>
        @if(!$roles->isEmpty())
            <div class="row clearfix">
                <label class="form-label col-xs-4 col-sm-3">角色：</label>
                <div class="form-controls col-xs-8 col-sm-9">
                    @foreach ($roles as $role)

                        <label class="">
                            <input type="checkbox"
                                   @if($role['isCheck']==1)
                                        checked
                                   @endif  value="{{$role['id']}}" name="roles[]">
                            {{$role['name']}}</label>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <a type="submit" href="javascript:" onclick="permission_edit();" class="btn btn-success radius"> 确定</a>
            </div>
        </div>
    </form>
</article>
@include("layouts.admin._footer")
<script type="text/javascript">
    function permission_edit()
    {
        $.post("{{route('permission.update',$permission->id)}}", $("form").serialize(), function(data) {
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);
        });
    }
</script>
</body>
</html>

