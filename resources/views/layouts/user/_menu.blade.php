<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/10
 * Time: 11:40
 * file: _menu.blade.php
 * email:yll1024335892@163.com
 */
?>
<aside class="Hui-admin-aside-wrapper">
    <div class="Hui-admin-logo-wrapper">
        <a class="logo navbar-logo" href="javascript:">
            <i class="va-m iconpic global-logo"></i>
            <span class="va-m">阿翼互联管理后台</span>
        </a>
    </div>
    <div class="Hui-admin-menu-dropdown bk_2">

        <dl class="Hui-menu" id="menu-picture">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe613;</i> 图片管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="picture-list.html" title="图片管理">图片管理</a></li>
                    <li><a onclick="picture_add('添加资讯','picture-add.html')" href="javascript:;" title="图片管理">新增图片</a>
                    </li>
                </ul>
            </dd>
        </dl>

        {{--<dl class="Hui-menu" id="menu-product">--}}
            {{--<dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe620;</i> 产品管理<i--}}
                        {{--class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>--}}
            {{--<dd class="Hui-menu-item">--}}
                {{--<ul>--}}
                    {{--<li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>--}}
                    {{--<li><a href="product-category.html" title="分类管理">分类管理</a></li>--}}
                    {{--<li><a href="product-list.html" title="产品管理">产品管理</a></li>--}}
                    {{--<li><a onclick="product_add('添加商品','product-add.html')" href="javascript:;" title="新增产品">新增产品</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</dd>--}}
        {{--</dl>--}}

    </div>
</aside>
<div class="Hui-admin-aside-mask"></div>

