<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    public  $timestamps=true;
    protected $guard_name='web';

    protected $fillable = [
        'pid','name','sort','status'
    ];
    protected $hidden = [

    ];


    private $rawList = array();                                              //原始的分类数据
    private static $formatList = array();                                           //格式化后的分类
    private $icon = array('--│', '--├ ', '--└ ');  //格式化的字符
    private $fields = array("id"=>'id',"pid"=>'pid',"name"=>'name',"fullname"=>'fullname');                                               //字段映射，分类id，上级分类pid,分类名称name

    /**
     * 构造函数，对象初始化
     * @param array,object  $model      数组或对象，基于TP3.0的数据表模型名称,若不采用TP，可传递空值。
     * @param array         $field      字段映射，分类cid，上级分类fid,分类名称,格式化后分类名称fullname
     */

//    public function __construct($model = '', $fields = array()) {
//        if (is_string($model) && (!empty($model))) {
//            if (!$this->model = D($model))
//                $this->error = $model . "模型不存在！";
//        }
//        if (is_object($model))
//            $this->model = &$model;
//
//        $this->fields['cid'] = $fields['0'] ? $fields['0'] : 'cid';
//        $this->fields['fid'] = $fields['1'] ? $fields['1'] : 'fid';
//        $this->fields['name'] = $fields['2'] ? $fields['2'] : 'name';
//        $this->fields['fullname'] = $fields['3'] ? $fields['3'] : 'fullname';
//    }

    /**
     * 获取分类信息数据
     * @param array,string  $condition  查询条件
     * @param string        $orderby    排序
     */

    private function _findAllCat($condition, $orderby = NULL) {
        $this->rawList = Category::get()->toArray();
       // $this->rawList = empty($orderby) ? Category::where($condition)->get()->toArray() : Category::where($condition)->orderBy($orderby)->get()->toArray();
    }



    /**
     * 返回给定上级分类$pid的所有同一级子分类
     * @param   int     $pid    传入要查询的fid
     * @return  array           返回结构信息
     */


    public function getChild($pid) {
        $childs = array();
        foreach ($this->rawList as $Category) {
            if ($Category[$this->fields['pid']] == $pid){
                $childs[] = $Category;
            }
        }
        return $childs;
    }



    private function _searchList($id = 0, $space = "") {
        $childs = $this->getChild($id);
        //下级分类的数组
        //如果没下级分类，结束递归
      static  $tempArr=array();
        if (!($n = count($childs))){
            return;
        }
        $m = 1;
        //循环所有的下级分类
        for ($i = 0; $i < $n; $i++) {
            $pre = "";
            $pad = "";
            if ($n == $m) {
                $pre = $this->icon[2];
            } else {
                $pre = $this->icon[1];
                $pad = $space ? $this->icon[0] : "";
            }
            $childs[$i][$this->fields['fullname']] = ($space ? $space . $pre : "") . $childs[$i][$this->fields['name']];
            $tempArr[]=$childs[$i];
            $this->_searchList($childs[$i][$this->fields['id']], $space . $pad . "--"); //递归下一级分类
            $m++;
        }
        $this->formatList=$tempArr;
    }



    /**
     * 不采用数据模型时，可以从外部传递数据，得到递归格式化分类
     * @param   array,string     $condition    条件
     * @param   int              $id          起始分类
     * @param   string           $orderby      排序
     * @return  array           返回结构信息
     */




    public function getList($condition = NULL, $id = 0, $orderby = NULL) {
        unset($this->rawList, $this->formatList);
        $this->_findAllCat($condition, $orderby);
        $this->_searchList($id);
        return $this->formatList;
    }




    /**
     * 检查分类参数$cid,是否为空
     * @param   int              $cid          起始分类
     * @return  boolean           递归格式化分类数组
     */


//    private function _checkCatID($cid) {
//        if (intval($cid)) {
//            return true;
//        } else {
//            $this->error = "参数分类ID为空或者无效！";
//            return false;
//        }
//    }



    /**
     * 检查分类参数$cid,是否为空
     * @param   int         $cid        分类cid
     */



//    private function _searchPath($cid) {
//        //检查参数
//        if (!$this->_checkCatID($cid))
//            return false;
//        $rs = $this->model->find($cid);                                        //初始化对象，查找上级Id；
//        $this->formatList[] = $rs;                                            //保存结果
//        $this->_searchPath($rs[$this->fields['fid']]);
//    }





    /**
     * 查询给定分类cid的路径
     * @param   int         $cid        分类cid
     * @return  array                   数组
     */



//    public function getPath($cid) {
//        unset($this->rawList, $this->formatList);
//        $this->_searchPath($cid);                                               //查询分类路径
//        return array_reverse($this->formatList);
//    }




    /**
     * 添加分类
     * @param   array         $data        一维数组，要添加的数据，$data需要包含上级分类ID。
     * @return  boolean                    添加成功，返回相应的分类ID,添加失败，返回FALSE；
     */


//    public function add($data) {
//        if (empty($data))
//            return false;
//        return $this->model->data($data)->add();
//    }



    /**
     * 修改分类
     * @param   array         $data     一维数组，$data需要包含要修改的分类cid。
     * @return  boolean                 组修改成功，返回相应的分类ID,修改失败，返回FALSE；
     */


//    public function edit($data) {
//        if (empty($data))
//            return false;
//        return $this->model->data($data)->save();
//    }



    /**
     * 删除分类
     * @param   int         $cid        分类cid
     * @return  boolean                 删除成功，返回相应的分类ID,删除失败，返回FALSE
     */


//    public function del($cid) {
//        $cid = intval($cid);
//        if (empty($cid)){
//            return false;
//        }
//        $conditon[$this->fields['cid']] = $cid;
//        return $this->model->where($conditon)->delete();
//    }



    /**
     * 删除分类
     * @param   int         $cid        分类cid
     * @return  boolean                 删除成功，返回相应的分类ID及所有子ID 数组,返回FALSE
     */



//    public function getIdArr($cid){
//        $cid = !empty($cid) ? intval($cid) : 0;
//        if (empty($cid)) return false;
//        $list = $this->getList($condition = NULL,$cid, $orderby = NULL);
//        foreach($list as $val){
//            $idArr[] = $val['cid'];
//        }
//        unset($list);
//        $idArr[] = $cid;
//        return $idArr;
//    }


}
