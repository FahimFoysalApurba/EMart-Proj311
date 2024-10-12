<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DisplayProCon;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\HomeUser;
use App\Http\Controllers\UserProfileCon;
use App\Http\Controllers\CartController;

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
Route::view("/adminPost", "adminPost");
Route::POST("/PostController", [PostController::class, 'postMaker']);
Route::view("/postError", "postError");
Route::view("/GiveOffer", "GiveOffer");
Route::view("/DisplayAdmin", "DisplayAdmin");
Route::get("/DisplayProCon",[DisplayProCon::class, 'display']);
Route::view("/headProfileAdmin","headProfileAdmin");
Route::view("/AdminProfile","AdminProfile");
Route::get("/adminProfileController",[adminProfileController::class, 'adminProfile']);
route::view("/HeaderAdminDasPro", "HeaderAdminDasPro");
route::view("/cart", "cart");
Route::get("/HomeUser",[HomeUser::class, 'displayUser']);
Route::get("/UserProfileCon",[UserProfileCon::class, 'userProfile']);
route::view("/HeadProfileUser", "HeadProfileUser");
Route::get("/CartController",[CartController::class, 'cartCont']);
Route::get("detail/{id}",[HomeUser::class, 'detail']);
Route::POST("add_to_cart",[HomeUser::class, 'addToCart']);
Route::get("/removeCart/{id}",[HomeUser::class, 'removeCart']);
Route::get("/orderNow/{price}",[HomeUser::class, 'order_now']);
Route::view("/order", "order");
Route::get("/buy/{price}",[HomeUser::class, 'buyProduct']);
