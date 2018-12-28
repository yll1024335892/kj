<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 11:39
 * file: _header.blade.php
 * email:yll1024335892@163.com
 */
?>
<header class="Hui-navbar">
    <div class="navbar">
        <div class="container-fluid clearfix">
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar">
                <ul class="clearfix">
                    <li id="Hui-msg"> <a href="/" target="_blank" title="首页"><i class="Hui-iconfont" style="font-size:18px">&#xe67f;</i></a> </li>
                    <li>超级管理员</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">{{Auth::user()->name}}<i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="{{route('ayi.user.index')}}" target="_blank" >个人信息</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

