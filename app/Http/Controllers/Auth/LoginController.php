<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $username = $request->username;
        $password = $request->password;

        if(Auth::attempt(['email' => $username, 'password' => $password], $request->remember) || Auth::attempt(['phone_number' => $username, 'password' => $password], $request->remember)){
            return redirect(route('user.detail', ['id' => Auth::user()->id]))->with('msg', 'login thành công');
        }
        return back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
    }
}
