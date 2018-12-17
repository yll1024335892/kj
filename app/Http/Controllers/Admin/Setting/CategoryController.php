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
        return view("admin.setting.category_create",compact("categoryList"));
    }

    public function store(Request $request){
        var_dump($request->all());
        Category::create($request->all());
    }
    
    public function destroy($id){
        $category = Category::findOrFail($id);
        $count= Category::where("pid",'=',$category->id)->get()->count();
       if($count>0){
           $data = [
               'status' => 0,
                'msg' => '有子类别不能够删除'
            ];
       }else{
           $res=$category->delete();
           if ($res) {
               $data = [
                   'status' => 0,
                   'msg' => '删除成功'
               ];
           } else {
               $data = [
                   'status' => 1,
                   'msg' => '删除失败'
               ];
           }
       }
        return $data;
    }

    public function edit($id){
        $categoryObj = Category::findOrFail($id)->toArray();
        $categoryList= $this->getCategoryList();
        return view("admin.setting.category_edit",compact("categoryObj","categoryList"));
    }

    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->pid=$request->input("pid");
        $category->name=$request->input("name");
        $category->status=$request->input("status");
        $category->save();
    }
}
