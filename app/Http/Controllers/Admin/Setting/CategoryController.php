<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function getCategoryList(){
        $modelCategory=new Category();
        return $modelCategory->getList();
    }
    public  function  index(){
        $menuMark="category_index";//是否是当前menu选择
        $menuSelect="setting";
        $categoryList= $this->getCategoryList();
        return view("admin.setting.category_index",compact("menuMark","menuSelect","categoryList"));
    }

    public function create(){
        $categoryList= $this->getCategoryList();
        return view("admin.setting.category_create","categoryList");
    }

    public function store(Request $request){
        var_dump($request->all());
        Category::create($request->all());
    }
}
