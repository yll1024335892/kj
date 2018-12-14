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
    饼状图
@endsection
@section('contain')
    <article class="Hui-admin-content clearfix">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-header">
                        会员概况
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 Hui-admin-datatime-tag" style="text-align:right;padding-bottom: 20px;">
                                <span class="active">今天</span>
                                <span>3天</span>
                                <span>7天</span>
                                <span>30天</span>
                                <span>90天</span>
                                <span>半年</span>
                                <span>1年</span>
                                <span>全部</span>
                                <span>自定义</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div id="echarts-1-1" style="height:170px"></div>
                                <div class="text-c f-14 c-666">项目1</div>
                            </div>
                            <div class="col-sm-3">
                                <div id="echarts-1-2" style="height:170px"></div>
                                <div class="text-c f-14 c-666">项目2</div>
                            </div>
                            <div class="col-sm-3">
                                <div id="echarts-1-3" style="height:170px"></div>
                                <div class="text-c f-14 c-666">项目3</div>
                            </div>
                            <div class="col-sm-3">
                                <div id="echarts-1-4" style="height:170px"></div>
                                <div class="text-c f-14 c-666">项目4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix mt-20">
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        手机号统计
                    </div>
                    <div class="panel-body">
                        <div id="charts-1" style="height:300px"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        性别完善情况
                    </div>
                    <div class="panel-body">
                        <div id="charts-2" style="height:300px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix mt-20">
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        生肖分布统计
                    </div>
                    <div class="panel-body">
                        <div id="charts-3" style="height:300px"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel">
                    <div class="panel-header">
                        性别统计
                    </div>
                    <div class="panel-body">
                        <div id="charts-4" style="height:300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
@section("script")
    <script type="text/javascript" src="{{asset("hui/lib/echarts/4.1.0.rc2/echarts.min.js")}}"></script>
    <script type="text/javascript">
        $(function () {
            // 占比
            var echarts1_1 = echarts.init(document.getElementById('echarts-1-1'));
            var echarts1_1_option = {
                title: {
                    text: '70%',
                    x: 'center',
                    y: 'center',
                    textStyle: {
                        fontWeight: 'normal',
                        color: '#333',
                        fontSize: 30
                    }
                },
                color: ['#1890ff', '#eeeeee'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}: {c} ({d}%)",
                },
                label: {
                    show: false,
                },
                series: [
                    {
                        type:'pie',
                        radius: ['65%', '80%'],
                        avoidLabelOverlap: false,
                        hoverAnimation: false,
                        label: {
                            show: false,
                        },
                        data:[
                            {value:70, name:'完成'},
                            {value:30, name:'未完成'}
                        ]
                    }
                ],
            };
            echarts1_1.setOption(echarts1_1_option);


            var echarts1_2 = echarts.init(document.getElementById('echarts-1-2'));
            var echarts1_2_option = {
                title: {
                    text: '65%',
                    x: 'center',
                    y: 'center',
                    textStyle: {
                        fontWeight: 'normal',
                        color: '#333',
                        fontSize: 30
                    }
                },
                color: ['#e87b78', '#eeeeee'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}: {c} ({d}%)",
                },
                label: {
                    show: false,
                },
                series: [
                    {
                        type:'pie',
                        radius: ['65%', '80%'],
                        avoidLabelOverlap: false,
                        hoverAnimation: false,
                        label: {
                            show: false,
                        },
                        data:[
                            {value:65, name:'完成'},
                            {value:35, name:'未完成'}
                        ]
                    }
                ],
            };
            echarts1_2.setOption(echarts1_2_option);

            var echarts1_3 = echarts.init(document.getElementById('echarts-1-3'));
            var echarts1_3_option = {
                title: {
                    text: '80%',
                    x: 'center',
                    y: 'center',
                    textStyle: {
                        fontWeight: 'normal',
                        color: '#333',
                        fontSize: 30
                    }
                },
                color: ['#61be67', '#eeeeee'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}: {c} ({d}%)",
                },
                label: {
                    show: false,
                },
                series: [
                    {
                        type:'pie',
                        radius: ['65%', '80%'],
                        avoidLabelOverlap: false,
                        hoverAnimation: false,
                        label: {
                            show: false,
                        },
                        data:[
                            {value:80, name:'完成'},
                            {value:20, name:'未完成'}
                        ]
                    }
                ],
            };
            echarts1_3.setOption(echarts1_3_option);

            var echarts1_4 = echarts.init(document.getElementById('echarts-1-4'));
            var echarts1_4_option = {
                title: {
                    text: '55%',
                    x: 'center',
                    y: 'center',
                    textStyle: {
                        fontWeight: 'normal',
                        color: '#333',
                        fontSize: 30
                    }
                },
                color: ['#4da7fd', '#eeeeee'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}: {c} ({d}%)",
                },
                label: {
                    show: false,
                },
                series: [
                    {
                        type:'pie',
                        radius: ['65%', '80%'],
                        avoidLabelOverlap: false,
                        hoverAnimation: false,
                        label: {
                            show: false,
                        },
                        data:[
                            {value:55, name:'完成'},
                            {value:45, name:'未完成'}
                        ]
                    }
                ],
            };
            echarts1_4.setOption(echarts1_4_option);

            // 饼状1
            var echarts1 = echarts.init(document.getElementById('charts-1'));
            var echarts1_option = {
                title : {
                    text: '总数',
                    subtext: '37568',
                    x:'center',
                    textStyle: {
                        fontSize: 18,
                    },
                    subtextStyle: {
                        color: '#595959',
                        fontSize: 16,
                    }
                },
                tooltip : {
                    trigger: 'item',
                    formatter: "{b} : {c} ({d}%)"
                },
                label: {
                    show: true,
                    formatter: function(param) {
                        return param.name + '\n' + param.value + ',  ' + Math.round(param.percent) + '%';
                    }
                },
                legend: {
                    x : 'center',
                    y : 'bottom',
                    data:['有效手机号','错误手机号','手机号信息为空']
                },
                series : [
                    {
                        name:'手机号质量',
                        type: 'pie',
                        radius : '65%',
                        center: ['50%', '50%'],
                        selectedMode: 'single',
                        color: ['#1890ff', '#df5667', '#888888'],
                        data:[
                            {
                                value: 1000,
                                name: '有效手机号',
                            },
                            {
                                value: 520,
                                name: '错误手机号',
                            },
                            {
                                value: 460,
                                name: '手机号信息为空',
                            }
                        ]
                    }
                ]
            }
            echarts1.setOption(echarts1_option);


            // 饼状2
            var echarts2 = echarts.init(document.getElementById('charts-2'));
            var echarts2_option = {
                title : {
                    text: '',
                    x:'center',
                    y: 'center',
                    textStyle: {
                        fontSize: 30,
                    }
                },
                color: ['#1890ff', '#eeeeee'],
                tooltip: {
                    show: false,
                },
                legend: {
                    x : 'center',
                    y : 'bottom',
                    data:['已完善','未完善']
                },
                series: [
                    {
                        type:'pie',
                        radius: ['60%', '70%'],
                        labelLine: {
                            show: false,
                        },
                        avoidLabelOverlap: false,
                        hoverAnimation: false,
                        data:[
                            {
                                value: 70,
                                name: '已完善',
                                label: {
                                    position: 'center',
                                    formatter: "{b} {d}%",
                                    fontSize: 18,
                                },
                            },
                            {
                                value: 30,
                                name: '未完善',
                                label: {
                                    show:false,
                                }
                            },
                        ]
                    }
                ]
            }
            echarts2.setOption(echarts2_option);

            // 星座分布统计 - 生肖
            var echarts3 = echarts.init(document.getElementById('charts-3'));
            var echarts3_option = {
                title : {
                    text: '',
                    textStyle: {
                        fontSize: 18,
                    }
                },
                color: ['#1890ff'],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}: {c} ({d}%)"
                },
                series: [
                    {
                        type:'pie',
                        roseType: 'area',
                        radius: ['0%', '70%'],
                        label: {
                            show: false,
                        },
                        itemStyle: {
                            color: 'white',
                            borderColor: '#1890ff'
                        },
                        avoidLabelOverlap: false,
                        data:[
                            {
                                name: '鼠',
                                value: 8,
                            },
                            {
                                name: '牛',
                                value: 8,
                            },
                            {
                                name: '虎',
                                value: 8,
                            },
                            {
                                name: '兔',
                                value: 9,
                            },
                            {
                                name: '龙',
                                value: 7,
                            },
                            {
                                name: '蛇',
                                value: 5,
                            },
                            {
                                name: '马',
                                value: 22,
                            },
                            {
                                name: '羊',
                                value: 8,
                            },
                            {
                                name: '猴',
                                value: 12,
                            },
                            {
                                name: '鸡',
                                value: 16,
                            },
                            {
                                name: '狗',
                                value: 14,
                            },
                            {
                                name: '猪',
                                value: 23,
                            },
                        ]
                    },
                    {
                        type: 'pie',
                        hoverOffset: 0,
                        data: [
                            {
                                value: 1,
                                name: '鼠',
                            },
                            {
                                value: 1,
                                name: '牛',
                            },
                            {
                                value: 1,
                                name: '虎',
                            },
                            {
                                value: 1,
                                name: '兔',
                            },
                            {
                                value: 1,
                                name: '龙',
                            },
                            {
                                value: 1,
                                name: '蛇',
                            },
                            {
                                value: 1,
                                name: '马',
                            },
                            {
                                value: 1,
                                name: '羊',
                            },
                            {
                                value: 1,
                                name: '猴',
                            },
                            {
                                value: 1,
                                name: '鸡',
                            },
                            {
                                value: 1,
                                name: '狗',
                            },
                            {
                                value: 1,
                                name: '猪',
                            }
                        ],
                        radius: ['70%', '90%'],
                        zlevel: -2,
                        itemStyle: {
                            borderColor: 'white',
                        },
                        markArea: {
                            markArea: false
                        },
                        emphasis: {
                            itemStyle: {
                                color: ['#2593f9'],
                            }
                        },
                        label: {
                            show: true,
                            position: 'inside',
                        }
                    }
                ]
            }
            echarts3.setOption(echarts3_option);

            // 饼状1
            var echarts4 = echarts.init(document.getElementById('charts-4'));
            var echarts4_option = {
                title : {
                    text: '总数',
                    subtext: '37568',
                    x:'center',
                    textStyle: {
                        fontSize: 18,
                    },
                    subtextStyle: {
                        color: '#595959',
                        fontSize: 16,
                    }
                },
                tooltip : {
                    trigger: 'item',
                    formatter: "{b} : {c} ({d}%)"
                },
                label: {
                    show: true,
                    formatter: function(param) {
                        return param.name + '\n' + param.value + ',  ' + Math.round(param.percent) + '%';
                    }
                },
                legend: {
                    x : 'center',
                    y : 'bottom',
                    data:['男','女','']
                },
                series : [
                    {
                        name:'男',
                        type: 'pie',
                        radius : '65%',
                        center: ['50%', '50%'],
                        selectedMode: 'single',
                        color: ['#1890ff', '#e87b78'],
                        data:[
                            {
                                value: 1000,
                                name: '男',
                            },
                            {
                                value: 520,
                                name: '女',
                            },
                        ]
                    }
                ]
            }
            echarts4.setOption(echarts4_option);
        });
    </script>
@endsection
