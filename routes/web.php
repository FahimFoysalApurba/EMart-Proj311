<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\LoginController;

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
});
Route::view("/entry", "entry");
Route::view("/footer", "footer");
Route::view("/header", "header");
Route::view("/register", "register");
Route::view("/login", "Login");
Route::view("/registerError", "registerError");
Route::POST("/RegisterController",[RegisterController::Class, 'registration']);
Route::POST("/LoginController", [LoginController::Class,'LoginCon']);
Route::view("/userDashboard", "userDashboard");
Route::view("/adminDashboard", "adminDashboard");
Route::view("/loginError", "loginError");
Route::view("/contact", "contact");
Route::view("/UserProfile", "UserProfile");
Route::view('/HeadUserDash', "HeadUserDash");
Route::view('/AdminProfile', "AdminProfile");
Route::get('/logout', function () {
    if (session()->has('user')){
        session()->pull('user');
    }
    return redirect('/entry');
});
Route::view("/about", "about");