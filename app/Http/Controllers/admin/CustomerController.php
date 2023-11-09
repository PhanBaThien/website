<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerController extends Controller
{
    public function index(){

        $customer= User::select();
        $data = User::get();
        return view('admin.customer.index',compact('data'));
    }
  
    public function editC($id)
    {
        $customers= User::get();
        $data = User::where('username', '=', $id)->first();
        return view('admin.customer.edit', compact('data','customers'));
    }
    public function updateC(Request $request)
    {

        $username = $request->username;
        $password = $request->password;
        $fullname = $request->fullname;
        $address = $request->address;
        $phone = $request->phone;
        $email = $request->email;

        User::where('username', '=', $username)->update([
            'password'=>$password,
            'fullname'=>$fullname,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email,
        ]);
        return redirect()->back()->with('success', 'Customer update successfully!');
    }

    public function delete($id)
    {
        $data = User::where('email', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customer removed successfully!');
    }

}
