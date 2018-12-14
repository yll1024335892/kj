<?php
/**
 * Created by 深圳市阿翼互联网有限公司.
 * User: yinliangliang
 * Date: 2018/12/11
 * Time: 15:33
 * file: statistics_linechart.blade.php
 * email:yll1024335892@163.com
 */
?>
@extends('layouts.admin.app')
@section("title","阿翼管理系统")
@section('nav-breadcrumb')
    首页
    <span class="c-gray en">/</span>
    系统统计
    <span class="c-gray en">/</span>
    柱状图
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="row clearfix">
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        手机号运营商统计
                    </div>
                    <div class="panel-body">
                        <div id="echarts-1" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        已经完善生日年龄统计
                    </div>
                    <div class="panel-body">
                        <div id="echarts-2" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript" src=" {{asset("hui/lib/echarts/4.1.0.rc2/echarts.min.js")}}"></script>
    <script type="text/javascript">
        $(function () {
            // 手机号运营商
            var echarts1 = echarts.init(document.getElementById('echarts-1'));
            var echarts1_option = {
                title: {
                    show: false
                },
                color: ['#1890ff'],
                tooltip: {
                    trigger: 'item',
                },
                grid: {
                    top: '3%',
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: {
                    type: 'value',
                    boundaryGap: [0, 0.01]
                },
                yAxis: {
                    type: 'category',
                    data: ['其他','电信','移动','联通']
                },
                barWidth : 24,
                emphasis: {
                    itemStyle: {
                        shadowColor: 'rgba(0, 0, 0, 0.5)',
                        shadowBlur: 2,
                    }
                },
                series: [
                    {
                        type: 'bar',
                        data : [200, 700, 800, 900],
                    }
                ]
            }
            echarts1.setOption(echarts1_option);

            // 已经完善生日年龄统计
            var echarts2 = echarts.init(document.getElementById('echarts-2'));
            var echarts2_option = {
                title : {
                    show: false
                },
                color: '#1890ff',
                grid: {
                    top: '3%',
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['10岁以下', '10-15岁', '16-20岁', '21-25岁', '26-30岁', '31-35岁', '36-40岁', '41-45岁', '46-50岁', '50岁以上']
                },
                yAxis: {
                    type: 'value'
                },
                label: {
                    fontSize: 14,
                    color: '#666',
                },
                series: [
                    {
                        data: [10, 30, 35, 34, 50, 45, 43, 37, 30, 8],
                        type: 'bar',
                        itemStyle: {
                            emphasis: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                            }
                        },
                        barWidth : 24,
                    }
                ]
            }
            echarts2.setOption(echarts2_option);
        });
    </script>
@endsection
