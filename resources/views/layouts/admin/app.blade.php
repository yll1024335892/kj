<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 11:39
 * file: app.blade.php
 * email:yll1024335892@163.com
 */
?>
@include('layouts.admin._meta')

<title>@yield('title', 'LaraBBS')</title>
<meta name="description" content="@yield('description', '我是描述')" />
<meta name="keyword" content="@yield('keyword', '我是key')" />
@yield('styles')
</head>
<body>
@include('layouts.admin._menu')

<div class="Hui-admin-dislpayArrow">
    <a href="javascript:void(0);" onClick="displaynavbar(this)">
        <i class="Hui-iconfont Hui-iconfont-left">&#xe6d4;</i>
        <i class="Hui-iconfont Hui-iconfont-right">&#xe6d7;</i>
    </a>
</div>

<section class="Hui-admin-article-wrapper">
    @include('layouts.admin._header')
    <div class="Hui-admin-article">
        <nav class="breadcrumb" style="background-color:#fff;padding: 0 24px">
           @yield('nav-breadcrumb')
        </nav>
        @yield('contain')
    </div>
</section>

@include('layouts.admin._footer')
@yield('script')
<!--请在下方写此页面业务相关的脚本-->
{{--<script type="text/javascript" src="static/business/js/main.js"></script>--}}
</body>
</html>

