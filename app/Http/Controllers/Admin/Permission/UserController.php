<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function  index(){
        $menuMark="user_index";//是否是当前menu选择
        $menuSelect="permission";
        $users = User::where('isadmin','=','1')->get();
        return view("admin.permission.user_show",compact("menuMark","menuSelect","users"));
    }

    public function  create(){
        $roles = Role::get();
        return view('admin.permission.user_create', compact("roles"));
    }
    public function  store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        $user = User::create([
            'name'=>$request->input('name'),
            'password'=>Hash::make($request->input('password')),
            "email"=>$request->input('email')
        ]);

        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

//        return redirect()->route('users.index')
//            ->with('flash_message',
//                'User successfully added.');
    }

    public function  edit($id){
        $user = User::findOrFail($id);
        $roles = Role::get();
        return view('admin.permission.user_edit', compact('user', 'roles'));
    }

    public function  update(Request $request,$id){
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);

        $input = $request->only(['name', 'email', 'password']);
        $roles = $request['roles'];
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        }
        else {
            $user->roles()->detach();
        }
//        return redirect()->route('users.index')
//            ->with('flash_message',
//                'User successfully edited.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $res=$user->delete();
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
