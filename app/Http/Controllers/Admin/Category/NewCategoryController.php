<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yll1024335892\Phptools\CategoryClass;


class NewCategoryController extends Controller
{
    public function index(){
        return view("admin.category.categoryNew");
    }

    /**
     * 显示添加的数据
     */
    public function addView(){
        return view("admin.category.categoryNew-add");
    }

    public function  edit($id){
        echo $id;
        return view("admin.category.categoryNew-edit");
    }
}
