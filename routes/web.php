<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Models\PasswordReset as ModelsPasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [LoginController::class, 'loginForm'])->middleware('login-middleware')->name('login');
Route::post('login', [LoginController::class, 'postLogin']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->middleware('login-middleware')->name('register');
Route::post('register', [RegisterController::class, 'saveRegister']);

Route::get('edit/{id}', [UserController::class, 'editForm'])->name('user.edit');
Route::post('edit/{id}', [UserController::class, 'saveEdit']);

Route::get('/detail-user/{id}', [UserController::class, 'detail'])->name('user.detail');

Route::get('/change-password/{id}', [UserController::class, 'changePassword'])->name('change-password');
Route::post('/change-password/{id}', [UserController::class, 'saveChange']);

Route::any('logout', function () {
    Auth::logout();
    return redirect(route('home'));
})->name('logout');

Route::any('forbiddance', function (){
    return "Bạn không có quyền truy cập trang này";
})->name('403');

Route::get('demo', function(){
    return view('demo');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password/{token}', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();
            event(new PasswordReset($user));
        }
    );
    dd($status);
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
