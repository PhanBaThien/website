<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){

        $Users= Users::select();
        $data = Users::get();
        return view('admin.users.index',compact('data'));
    }
    public function create()
    {
        $user = Users::get();
        return view('admin.users.create', compact('user'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',


        ]);

        $users = new Users();
        $users->id = $request->id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->password = $request->password;

        $users->save(
        );

        return redirect()->back()->with('success', 'User added successfully!');
    }
    public function editU($id)
    {
        $users= Users::get();
        $data = Users::where('id', '=', $id)->first();
        return view('admin.users.edit', compact('data','users'));
    }
    public function updateU(Request $request)
    {

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;



        Users::where('id', '=', $id)->update([
            'name'=>$name,
            'email'=>$email,
            'role'=>$role,

        ]);
        return redirect()->back()->with('success', 'Customer update successfully!');
    }
    public function delete($id)
    {
        $data = Users::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customer removed successfully!');
    }

    public function editC($id)
    {
        $users= Users::get();
        $data = Users::where('id', '=', $id)->first();
        return view('editC', compact('data','users'));
    }
    public function updateC(Request $request)
    {

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;



        Users::where('id', '=', $id)->update([
            'name'=>$name,
            'email'=>$email,
            'role'=>$role,

        ]);
        return redirect()->back()->with('success', 'Customer update successfully!');
    }

}

