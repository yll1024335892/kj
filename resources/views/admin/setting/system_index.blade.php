<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 11:29
 * file: system_index.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    系统管理
    <span class="c-gray en">/</span>
    系统设置
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="panel">
            <div class="panel-body">
                <form action="" method="post" class="form form-horizontal" id="form-system-base">
                    <div id="tab-system" class="HuiTab">
                        <div class="tabBar cl"><span>基本设置</span><span>支付设置</span><span>邮件设置</span></div>
                        <div class="tabCon">
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="websiteTitle" name="websiteTitle" placeholder="控制在25个字、50个字节以内" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>关键词：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="websiteKeywords" name="websiteKeywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="websiteDescription" name="websiteDescription" placeholder="空制在80个汉字，160个字符以内" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>底部版权信息：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="websiteCopyright" name="websiteCopyright" placeholder="&copy; 2018 H-ui.net" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">备案号：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="websiteIcp" name="websiteIcp" placeholder="京ICP备00000000号" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">统计代码:</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tabCon">
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">支付宝设置</label>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">appid</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text"  name="appid" placeholder="" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">公钥:</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">私钥:</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">微信支付设置</label>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">appid</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text"  name="appid" placeholder="" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">公钥:</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">私钥:</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tabCon">
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">邮件发送模式：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text"  value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">SMTP服务器：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text"  value="25" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="email-name" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="password" id="email-password" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <label class="form-label col-xs-4 col-sm-2">收件邮箱地址：</label>
                                <div class="form-controls col-xs-8 col-sm-9">
                                    <input type="text" id="email-address" value="" class="input-text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                            <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript">
        $("#tab-system").Huitab();
    </script>
@endsection
