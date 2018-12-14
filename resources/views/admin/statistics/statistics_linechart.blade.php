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
    折线图
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-header">
                        折线图
                    </div>
                    <div class="panel-body">
                        <div class="Hui-admin-datetime-select">
                            <span onclick="newUser('day',this)" class="active">天</span>
                            <span onclick="newUser('week',this)">周</span>
                            <span onclick="newUser('month',this)">月</span>
                        </div>
                        <div id="echarts-1" style="height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript" src="{{asset("hui/lib/echarts/4.1.0.rc2/echarts.min.js")}}"></script>
    <script type="text/javascript">
        function newUser(type,obj){
            $(obj).parent().find("span").removeClass("active");
            $(obj).addClass("active");
            var xData = [];
            var yData1 = [];
            var yData2 = [];

            // 天
            if(type == 'day'){
                xData = [
                    '2018-01-01',
                    '2018-01-02',
                    '2018-01-03',
                    '2018-01-04',
                    '2018-01-05',
                    '2018-01-06',
                    '2018-01-07',
                    '2018-01-08',
                    '2018-01-09',
                    '2018-01-10',
                    '2018-01-11',
                    '2018-01-12',
                    '2018-01-12',
                    '2018-01-13',
                    '2018-01-14',
                    '2018-01-15',
                    '2018-01-16',
                    '2018-01-17',
                    '2018-01-18',
                    '2018-01-19',
                    '2018-01-20',
                    '2018-01-21',
                    '2018-01-22',
                    '2018-01-23',
                    '2018-01-24',
                    '2018-01-25',
                    '2018-01-26',
                    '2018-01-27',
                    '2018-01-28',
                    '2018-01-29',
                    '2018-01-30',
                    '2018-01-31',
                ];
                yData1 =[
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                    1400,
                    1200,
                ];
                yData2 = [
                    120,
                    140,
                    120,
                    140,
                    120,
                    140,
                    120,
                    140,
                    120,
                    120,
                    20,
                    100,
                    39,
                    49,
                    38,
                    78,
                    5,
                    66,
                    33,
                    22,
                    44,
                    55,
                    23,
                    11,
                    32,
                    34,
                    55,
                    22,
                    33,
                    55,
                    77,
                ];
            }

            // 周
            if(type == 'week') {
                xData = [];
                yData1 = [];
                yData2 = [];
            }

            // 月
            if(type == 'month'){
                xData = [];
                yData1 = [];
                yData2 = [];
            }
            var echarts1 = echarts.init(document.getElementById('echarts-1'));
            var echarts1_option = {
                title: {
                    show: false,
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    x : 'center',
                    y : 'top',
                    data: ['会员','非会员']
                },
                xAxis: {
                    data: xData,
                },
                yAxis:{
                    type: 'value',
                    nameTextStyle: {
                        // 坐标轴名称的文字样式
                    },
                    axisLine: {
                        // 坐标轴轴线相关设置
                    }
                },
                series: [
                    {
                        name: '会员',
                        type: 'line',
                        symbolSize:10,
                        symbol:'circle',
                        itemStyle: {
                            color: '#1bb495',
                            bborderColor: '#fff',
                            borderWidth: 2,
                        },
                        data: yData1,
                    },
                    {
                        name: '非会员',
                        type: 'line',
                        symbolSize:10,
                        symbol:'circle',
                        itemStyle: {
                            color: '#25c6c8',
                            borderColor: '#fff',
                            borderWidth: 2,
                        },
                        data: yData2,
                    }
                ]
            }
            echarts1.setOption(echarts1_option);
        }

        $(function () {
            newUser('day'); // 默认天
        });
    </script>
@endsection
