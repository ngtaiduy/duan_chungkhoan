<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
// use App\Http\Controllers\ResetPasswordController;
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

Auth::routes();

// Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
// Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

// Route::post('reset-password', 'App\Http\Controllers\ResetPasswordController@sendMail');
Route::put('password/reset/{token}', 'App\Http\Controllers\ResetPasswordController@reset');


// Route::get('{path?}', 'SinglePageController')->where('path', '[a-zA-Z0-9-/]+');