<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function editForm($id){
        $user = User::find($id);
        $roles = Role::all();
        if (!$user){
            return redirect()->back();
        }
        return view('users.edit', compact('user', 'roles'));
    }

    public function saveEdit($id, Request $request){
        $model = User::find($id);
        if(!$model){
            return redirect(route('user.index'));
        }
        $users_except = User::all()->except($id);
        $count_user = $users_except->whereIn('email', $request->email)->count();
        if ($count_user > 0){
            return redirect(route('user.edit', ['id' => $id]))->with('message_email', 'Email đã có người dùng');
        }
        if($request->hasFile('avatar')){
            Storage::delete($model->avatar);
            
            $imgPath = $request->file('avatar')->store('public/users');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->avatar = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('user.detail', ['id' => $id]))->with('message_success', 'Bạn đã thay đổi thông tin thành công');
    }
    public function detail($id){
        $user = User::find($id);
        $user->load('role', 'specialist_info');
        if($user->role_id == 1 & isset(Auth::user()->id)){
            $user->specialist_info->view = $user->specialist_info->view + 1;
            $user->specialist_info->save();
        }

        if(!$user){
            return redirect(route('403'));
        }
        return view('users.detail', compact('user'));
    }

    public function changePassword($id){
        return view('users.change-password');
    }

    public function saveChange($id, ChangePasswordRequest $request){
        $user = User::find($id);

        $password = $request->password;
        $newP = $request->newpassword;
        $newP2 = $request->newpassword2;

        if (password_verify($password, $user->password)){
            if ($newP == $newP2){
                $newPasswordHash = Hash::make($newP);
                $user->password = $newPasswordHash;
                $user->save();
                return redirect(route('user.detail', ['id' => $id]))->with('message_success', 'Bạn đã thay đổi mật khẩu thành công');
            } else {
                return redirect(route('change-password', ['id' => $id]))->with('message_password2', 'Mật khẩu mới nhập lại không trùng');
            }
        } else {
            return redirect(route('change-password', ['id' => $id]))->with('message_password', 'Bạn nhập sai mật khẩu hiện tại');
        }
    }
}
