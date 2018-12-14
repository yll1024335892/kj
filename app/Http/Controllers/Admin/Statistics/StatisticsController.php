<?php

namespace App\Http\Controllers\Admin\Statistics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    /**
     * 折线图
     */
   public function linechart(){
        $menuMark="statistics_linechart";//是否是当前menu选择
        $menuSelect="statistics";
        return view("admin.statistics.statistics_linechart",compact("menuMark","menuSelect"));
   }

    /**
     * 区域图
     */
   public function  areamap(){
       $menuMark="statistics_areamap";//是否是当前menu选择
       $menuSelect="statistics";
       return view("admin.statistics.statistics_areamap",compact("menuMark","menuSelect"));
   }

    /**
     * 柱状图
     */
   public function  histogram(){
       $menuMark="statistics_histogram";//是否是当前menu选择
       $menuSelect="statistics";
       return view("admin.statistics.statistics_histogram",compact("menuMark","menuSelect"));
   }

    /**
     * 饼形图
     */
   public function  piechart(){
       $menuMark="statistics_piechart";//是否是当前menu选择
       $menuSelect="statistics";
       return view("admin.statistics.statistics_piechart",compact("menuMark","menuSelect"));
    }

    /**
     * 散点图
     */
    public function  scatterplot(){
        $menuMark="statistics_scatterplot";//是否是当前menu选择
        $menuSelect="statistics";
        return view("admin.statistics.statistics_scatterplot",compact("menuMark","menuSelect"));
    }
}
