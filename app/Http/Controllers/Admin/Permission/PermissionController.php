<?php

namespace App\Http\Controllers\Admin\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function  index(){
        $menuMark="permission_index";//是否是当前menu选择
        $menuSelect="permission";
        $permissionList=Permission::all();
        return view("admin.permission.permission_show",compact("menuMark","menuSelect","permissionList"));
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

        return redirect()->route('admin.permission.index')
            ->with('flash_message',
                'Permission'. $permission->name.' added!');
    }

    public function update(Request $request ,$id){
        $permission = Permission::findOrFail($id);

        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $input = $request->all();
        $permission->fill($input)->save();

//        return redirect()->route('admin.permissions.index')
//            ->with('flash_message',
//                'Permission'. $permission->name.' updated!');
    }
    public function edit($id){
        $permission = Permission::find($id);
        return view("admin.permission.permission_edit",compact("permission"));
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
}
