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
    区域图
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-header">
                        地图
                    </div>
                    <div class="panel-body">
                        <div id="echarts-1" style="height:520px"></div>
                    </div>
                </div>

            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript" src="{{asset("hui/lib/echarts/4.1.0.rc2/echarts.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("hui/lib/echarts/4.1.0.rc2/china.js")}}"></script>
    <script type="text/javascript" src="{{asset("hui/lib/echarts/4.1.0.rc2/all-province.js")}}"></script>
    <script type="text/javascript">
        var chinaData = [
            {name: '北京',value: 1000},
            {name: '天津',value: 890},
            {name: '上海',value: 800},
            {name: '重庆',value: 500},
            {name: '河北',value: 300},
            {name: '河南',value: 400},
            {name: '云南',value: 358},
            {name: '辽宁',value: 0},
            {name: '黑龙江',value: 0},
            {name: '湖南',value: 0},
            {name: '安徽',value: 10},
            {name: '山东',value: 35},
            {name: '新疆',value: 20},
            {name: '江苏',value: 55},
            {name: '浙江',value: 66},
            {name: '江西',value: 77},
            {name: '湖北',value: 88},
            {name: '广西',value: 99},
            {name: '甘肃',value: 44},
            {name: '山西',value: 55},
            {name: '内蒙古',value: 43},
            {name: '陕西',value: 67},
            {name: '吉林',value: 68},
            {name: '福建',value: 87},
            {name: '贵州',value: 56},
            {name: '广东',value: 97},
            {name: '青海',value: 38},
            {name: '西藏',value: 900},
            {name: '四川',value: 2},
            {name: '宁夏',value: 55},
            {name: '海南',value: 66},
            {name: '台湾',value: 33},
            {name: '香港',value: 44},
            {name: '澳门',value: 77}
        ];
        function changeMap(){
            var myChart= echarts.init(document.getElementById('echarts-1'));
            option = {
                title: {
                    show: false
                },
                tooltip: {
                    trigger: 'item',
                },
                legend: {
                    left: 'left',
                    data: ['强'],
                    textStyle: {
                        color: '#ccc'
                    }
                },
                dataRange: {
                    min: 0,
                    max: 1000,
                    x: 'left',
                    y: 'bottom',
                    text:['高','低'],
                    calculable : true,
                    color: ["#1890ff","#e2fbfe"]
                },
                toolbox: {
                    show: false,
                    orient : 'vertical',
                    x: 'right',
                    y: 'center',
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                series: [
                    {
                        name: '中国',
                        type: 'map',
                        mapType: 'china',
                        selectedMode : 'single',
                        label: {
                            normal: {
                                show: true
                            },
                            emphasis: {
                                show: true,
                                itemStyle: {
                                    areaColor: '#296fd6',
                                }
                            }
                        },
                        data: chinaData,
                    }
                ]
            };
            myChart.setOption(option);
            window.addEventListener("resize",function(){
                myChart.resize();
            });
        }
        $(function () {
            changeMap();
        });
    </script>
@endsection
