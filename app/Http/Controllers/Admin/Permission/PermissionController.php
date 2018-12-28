<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Models\RoleHasPermissions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function  index(Request $request){
        $menuMark="permission_index";//是否是当前menu选择
        $menuSelect="permission";
        $key=$request->input('search');
        if (empty($key)){//判断是否是搜索
            $permissionList = Permission::paginate(20);
        }else{
            $permissionList = Permission::where('name', 'like', '%'.$key.'%')->paginate(20);
        }
        return view("admin.permission.permission_show",compact("menuMark","menuSelect","permissionList","key"));
    }

    public function create(){
        $roles=  Role::get();
        return view("admin.permission.permission_create",compact("roles"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];

        $permission->save();

        if (!empty($request['roles'])) {
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record
                $permission = Permission::where('name', '=', $name)->first();
                $r->givePermissionTo($permission);
            }
        }
//
//        return redirect()->route('admin.permission.index')
//            ->with('flash_message',
//                'Permission'. $permission->name.' added!');
    }

    public function update(Request $request ,$id){
        $permission = Permission::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $input = $request->except(['roles']);
        $permission->fill($input)->save();
        $roles = $request['roles'];
        $allValue=RoleHasPermissions::where(["permission_id"=>$id])->get()->toArray();//获取指定权限的角色权限数据
        $postRoleHasP=array();
        if (!empty($request['roles'])) {
            foreach ($roles as $role) {
                $postRoleHasP[]=['permission_id'=>$id,'role_id'=>$role];
            }
        }
        $res=  $this->get_diff_array_by_filter($allValue,$postRoleHasP);//比较二维数组的差集
        if (empty($res)){
            if (!empty($request['roles'])) {
                foreach ($roles as $role) {
                    var_export($role);
                    $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record
                    $permission = Permission::where('name', '=', $input['name'])->first();
                    $r->givePermissionTo($permission);
                }
            }
        }else{
            foreach ($res as $value){
                RoleHasPermissions::where(['permission_id'=>$id,'role_id'=>$value['role_id']])->delete();
            }
        }

    }
    public function edit($id){
        $permission = Permission::find($id);
        $roleHasP= RoleHasPermissions::where('permission_id','=',$id)->get()->toArray();
        $roles=  Role::get();
        foreach ($roles as $key=>$value){
           $isCheck=false;
            foreach ($roleHasP as $key1=>$value1){
                if ($value['id']==$value1['role_id']){
                    $isCheck=true;
                    break;
                }else{
                    $isCheck=false;
                }
            }
            if ($isCheck){
                $roles[$key]['isCheck']=1;
            }else{
                $roles[$key]['isCheck']=0;
            }
        }
        //权限找到角色
        return view("admin.permission.permission_edit",compact("permission","roles"));
    }


    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        if ($permission->name == "Administer roles & permissions") {
            return redirect()->route('permissions.index')
                ->with('flash_message',
                    'Cannot delete this Permission!');
        }
        $permission->delete();
        return redirect()->route('permissions.index')
            ->with('flash_message',
                'Permission deleted!');
    }

    private function get_diff_array_by_filter($arr1,$arr2)
    {
        try {
            return array_filter($arr1, function ($v) use ($arr2) {
                return !in_array($v, $arr2);
            });
        } catch (\Exception $exception) {
            return $arr1;
        }
    }
}
