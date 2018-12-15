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
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">{{$userInfo['name']}}<i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                退出登录
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="javascript:" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

