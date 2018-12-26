<?php

namespace App\Http\Controllers\Admin\Permission;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function  index(){
        $menuMark="row_index";//是否是当前menu选择
        $menuSelect="permission";
        $roles= Role::all();

        return view("admin.permission.role_show",compact("menuMark","menuSelect","roles"));
    }

    public function create(){
        $permissionList= Permission::all();
        return view("admin.permission.role_create",compact("permissionList"));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'name'=>'required|unique:roles|max:10',
                'permissions' =>'required',
            ]
        );

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;

        $permissions = $request['permissions'];

        $role->save();


        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail();
            $role = Role::where('name', '=', $name)->first();
            $role->givePermissionTo($p);
        }

//        return redirect()->route('roles.index')
//            ->with('flash_message',
//                'Role'. $role->name.' added!');
    }


    public function update(Request $request,$id){
        $role = Role::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:10|unique:roles,name,'.$id,
            'permissions' =>'required',
        ]);
        $input = $request->except(['permissions']);
        $permissions = $request['permissions'];
        $role->fill($input)->save();
        $p_all = Permission::all();
        foreach ($p_all as $p) {
            $role->revokePermissionTo($p);
        }
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail(); //Get corresponding form permission in db
            $role->givePermissionTo($p);
        }
        $data = [
            'status' => 1,
            'msg' => '删除成功'
        ];
        return $data;
    }
    public function edit($id){
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view("admin.permission.role_edit",compact("role",'permissions'));
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $res= $role->delete();
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
        return $data;
    }
}
