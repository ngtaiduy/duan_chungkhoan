<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SpecialistInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function saveRegister(Request $request){
        $count_user = User::where('email', $request->email)->count();
        if ($count_user > 0){
            return redirect(route('register'))->with('message_email', 'Email đã có người dùng');
        }
        if ($request->password == $request->password2){
            $model = new User();
            $passwordHash = Hash::make($request->password);
            $model->fill($request->all());
            $model->password = $passwordHash;
            $model->save();

            $specialistModel = new SpecialistInfo();
            $specialistModel->user_id = $model->id;
            $specialistModel->save();

            return redirect(route('login'));
        } else {
            return redirect(route('register'))->with('message_password', 'Mật khẩu không trùng khớp, mời nhập lại');
        }
    }
}
