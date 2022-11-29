<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BasicInfo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (session()->get('userlogin') == true) {
            return view('admin.dashboard');
        } else {
            return redirect(route('admin.login'));
        }
    }

    public function loginview()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $userPassword = md5($request['password']);
        $userEmail = $request['email'];

        $user = Admin::where('email', '=', "$userEmail")->where('password', '=', "$userPassword")->first();
        if (!is_null($user)) {
            session()->put('userlogin', true);
            return redirect(route('admin'));
        } else {
            return redirect(route('admin.login'));
        }
    }

    public function logout()
    {
        session()->forget('userlogin');
        return redirect(route('home'));
    }


    public function info()
    {
        $info = BasicInfo::find(1);
        $data = compact('info');
        return view('admin.info')->with($data);
    }

    public function updateInfo(Request $request)
    {
        $info = BasicInfo::find(1);
        $info->email = $request['email'];
        $info->phone_no = $request['phone_no'];
        $info->address = $request['address'];
        $info->facebook = $request['facebook'];
        $info->twitter = $request['twitter'];
        $info->instagram = $request['instagram'];
        $info->description = $request['description'];
        $info->save();
        return redirect(route('admin'));
    }
}
