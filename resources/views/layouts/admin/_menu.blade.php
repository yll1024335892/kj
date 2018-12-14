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
        <dl id="menu-article" class="Hui-menu">
            <dt class="Hui-menu-title">
                <i class="Hui-iconfont">&#xe616;</i> 资讯管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i>
            </dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="article-list.html" title="资讯管理">资讯管理</a></li>
                    <li><a onclick="article_add('添加资讯','article-add.html')" href="javascript:;" title="新增资讯">新增资讯</a>
                    </li>
                    <li>
                        <dl class="Hui-menu">
                            <dt class="Hui-menu-title">二级菜单<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i>
                            </dt>
                            <dd class="Hui-menu-item">
                                <ul>
                                    <li><a href="#" title="">三级菜单</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </dd>
        </dl>
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
        <dl class="Hui-menu" id="menu-product">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe620;</i> 产品管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
                    <li><a href="product-category.html" title="分类管理">分类管理</a></li>
                    <li><a href="product-list.html" title="产品管理">产品管理</a></li>
                    <li><a onclick="product_add('添加商品','product-add.html')" href="javascript:;" title="新增产品">新增产品</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-comments">
            <dt class="Hui-menu-title" @if (isset($menuSelect) && $menuSelect=="comment") selected @endif><i class="Hui-iconfont">&#xe622;</i> 评论管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item" @if (isset($menuSelect) && $menuSelect=="comment") style="display: block;" @endif>
                <ul>
                    <li @if (isset($menuMark) && $menuMark=="comment_list")class="current" @endif><a href="{{route('comment.list')}}" title="评论列表">评论列表</a></li>
                    <li @if (isset($menuMark) && $menuMark=="opinion_list")class="current" @endif><a href="{{route('opinion.list')}}" title="意见反馈">意见反馈</a></li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-member">
            <dt class="Hui-menu-title" @if (isset($menuSelect) && $menuSelect=="member") selected @endif><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item" @if (isset($menuSelect) && $menuSelect=="member") style="display: block;" @endif>
                <ul>
                    <li @if (isset($menuMark) && $menuMark=="member_index")class="current" @endif><a href="{{route('member.index')}}" title="会员列表">会员列表</a></li>
                    <li @if (isset($menuMark) && $menuMark=="member_dellist")class="current" @endif><a href="{{route('member.dellist')}}" title="删除的会员">删除的会员</a></li>
                    <li @if (isset($menuMark) && $menuMark=="member_share_index")class="current" @endif><a href="{{route('member.share')}}" title="分享记录">分享记录</a></li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-admin">
            <dt class="Hui-menu-title" @if (isset($menuSelect) && $menuSelect=="permission") selected @endif><i
                        class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i>
            </dt>
            <dd class="Hui-menu-item" @if (isset($menuSelect) && $menuSelect=="permission") style="display: block;" @endif>
                <ul>
                    <li @if (isset($menuMark) && $menuMark=="row_index")class="current" @endif><a href="{{route('role.index')}}"
                                                                             title="角色管理">角色管理</a></li>
                    <li @if (isset($menuMark) && $menuMark=="permission_index")class="current" @endif><a href="{{route("permission.index")}}"
                                                                                    title="权限管理">权限管理</a></li>
                    <li @if (isset($menuMark) && $menuMark=="user_index")class="current" @endif><a href="{{route('user.index')}}"
                                                                             title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-tongji">
            <dt class="Hui-menu-title" @if (isset($menuSelect) && $menuSelect=="statistics") selected @endif><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item" @if (isset($menuSelect) && $menuSelect=="statistics") style="display: block;" @endif>
                <ul>
                    <li @if (isset($menuMark) && $menuMark=="statistics_linechart")class="current" @endif><a href="{{route('statistics.linechart')}}" title="折线图">折线图</a></li>
                    <li @if (isset($menuMark) && $menuMark=="statistics_areamap")class="current" @endif><a href="{{route('statistics.areamap')}}" title="区域图">区域图</a></li>
                    <li @if (isset($menuMark) && $menuMark=="statistics_histogram")class="current" @endif><a href="{{route('statistics.histogram')}}" title="柱状图">柱状图</a></li>
                    <li @if (isset($menuMark) && $menuMark=="statistics_piechart")class="current" @endif><a href="{{route('statistics.piechart')}}" title="饼状图">饼状图</a></li>
                    <li @if (isset($menuMark) && $menuMark=="statistics_scatterplot")class="current" @endif><a href="{{route('statistics.scatterplot')}}" title="散点图">散点图</a></li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-system">
            <dt class="Hui-menu-title" @if (isset($menuSelect) && $menuSelect=="setting") selected @endif><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item" @if (isset($menuSelect) && $menuSelect=="setting") style="display: block;" @endif>
                <ul>
                    <li @if (isset($menuMark) && $menuMark=="system_index")class="current" @endif><a href="{{url('system')}}" title="系统设置">系统设置</a></li>
                    <li @if (isset($menuMark) && $menuMark=="category_index")class="current" @endif><a href="{{url('category')}}" title="栏目管理">栏目管理</a></li>
                    <li @if (isset($menuMark) && $menuMark=="log_index")class="current" @endif><a href="{{url('log')}}" title="系统日志">系统日志</a></li>
                </ul>
            </dd>
        </dl>
        <dl class="Hui-menu" id="menu-errorPage">
            <dt class="Hui-menu-title"><i class="Hui-iconfont">&#xe6e0;</i> 异常页面<i
                        class="Hui-iconfont Hui-admin-menu-dropdown-arrow">&#xe6d5;</i></dt>
            <dd class="Hui-menu-item">
                <ul>
                    <li><a href="error-404.html" title="404">404</a></li>
                    <li><a href="error-500.html" title="404">500</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="Hui-admin-aside-mask"></div>

