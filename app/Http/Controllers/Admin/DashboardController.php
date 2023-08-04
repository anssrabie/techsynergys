<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditProfileRequest;
use App\Models\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Hash;

class DashboardController extends Controller
{

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

    public function index(){
        return view('admin.index');
    }


    public function editProfile(){

        $id = Auth::id();
        $data = Admin::select()->find($id);
        return view('admin.auth.edit_profile', compact('data'));
    }

    public function postEditProfile(EditProfileRequest $request){

        $id = Auth::id();
        $data = Admin::find($id);

        if($request->has('password') AND !empty($request->password) AND !is_null($request->password)){
            $password = Hash::make($request->password);
        }else {
            $password = $data->password;
        }


        Admin::where('id', $id)->update([
            'email' => $request->email,
            'password' => $password,
            'name' => $request->name,
        ]);

        return redirect()->route('edit.profile')->with(['success'=>'تم تعديل ملفك الشخصي بنجاح']);




    }
}
