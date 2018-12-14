<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//后台管理路由
Route::get('/ayiadmin', 'Admin\IndexController@index')->name('ayiadmin');
Route::resource('permission','Admin\Permission\PermissionController',['except' => ['show']]);
Route::resource('role','Admin\Permission\RoleController',['except' => ['show']]);
Route::resource('user','Admin\Permission\UserController',['except' => ['show']]);
Route::resource('system','Admin\Setting\SystemController',['except'=>['show']]);
Route::resource('log','Admin\Setting\LogController',['except'=>['show']]);
Route::resource('category','Admin\Setting\CategoryController',['except'=>['show']]);
Route::resource('member','Admin\Member\MemberController',['except'=>['show']]);
Route::get('/member/dellist', 'Admin\Member\MemberController@dellist')->name('member.dellist');
Route::get('/member/views', 'Admin\Member\MemberController@views')->name('member.views');
Route::get('/member/reduction', 'Admin\Member\MemberController@reduction')->name('member.reduction');
Route::get('/member/changepsw', 'Admin\Member\MemberController@changepsw')->name('member.changepsw');
Route::get('/member/share', 'Admin\Member\SharelinkController@index')->name('member.share');
Route::get('/ayiadmin/login', 'Admin\LoginController@login')->name('ayiadmin.login');
Route::get('/ayiadmin/regist', 'Admin\LoginController@regist')->name('ayiadmin.regist');
//统计相关
Route::get('/statistics/linechart','Admin\Statistics\StatisticsController@linechart')->name('statistics.linechart');
Route::get('/statistics/areamap','Admin\Statistics\StatisticsController@areamap')->name('statistics.areamap');
Route::get('/statistics/histogram','Admin\Statistics\StatisticsController@histogram')->name('statistics.histogram');
Route::get('/statistics/piechart','Admin\Statistics\StatisticsController@piechart')->name('statistics.piechart');
Route::get('/statistics/scatterplot','Admin\Statistics\StatisticsController@scatterplot')->name('statistics.scatterplot');
//交互相关:评论和意见反馈
Route::get('/comment/list','Admin\Comment\CommentController@list')->name('comment.list');
Route::get('/opinion/list','Admin\Comment\OpinionController@list')->name('opinion.list');

//前台相关
Route::get('/ayi/user','User\UserController@index')->name("ayi.user.index");

