<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 19:18
 * file: role_edit.blade.php
 * email:yll1024335892@163.com
 */
?>
@include("layouts.admin._meta")
</head>
<body>
<article class="clearfix pd-20">
    <form  class="form form-horizontal" id="form-admin-role-add">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">角色名称：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$role->name}}"  placeholder=""  name="name">
            </div>
        </div>
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">备注信息：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <input type="text" class="input-text"  placeholder="" value="{{$role->descript}}"  name="descript">
            </div>
        </div>

        @if(!$permissions->isEmpty())
        <div class="row clearfix">
            <label class="form-label col-xs-4 col-sm-3">权限名称：</label>
            <div class="form-controls col-xs-8 col-sm-9">
                <?php $mark=-1;?>
                @foreach($permissions as $permission)
                    @if(!($role->permissions)->isEmpty())
                        @foreach($role->permissions as $temp)
                            @if($permission['id']==$temp['id'])
                                    <?php $mark=$temp['id'];?>
                                @endif
                        @endforeach
                    @endif
                        <label class="">
                            <input type="checkbox"  @if($permission->id == $mark) checked @endif value="{{$permission->id}}" name="permissions[]">
                            {{$permission->name}}</label>
                    @endforeach
            </div>
        </div>
        @endif
        <div class="row clearfix">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button onclick="role_edit({{$role->id}});" class="btn btn-success radius" id="admin-role-save"><i class="icon-ok"></i> 确定</button>
            </div>
        </div>
    </form>
</article>
@include("layouts.admin._footer")
<script type="text/javascript">
    function role_edit(id)
    {
        $.post("{{ url('role') }}/" + id, $("form").serialize(), function(data) {
            console.log(data.msg);
            layer.msg(data.msg, { icon: 6});
            layer.closeAll();
           // layer.closeAll();
           // layer_close();
        });
    }
</script>
</body>
</html>
