<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//userAuth
Route::get('/user/registration',[userAuthController::class,'registration'])->name('user.registration');
Route::post('/user/register',[userAuthController::class,'register'])->name('register.user');
Route::get('/user/login',[userAuthController::Class,'login'])->name('user.login');
Route::post('/user/store',[userAuthController::Class,'store'])->name('store.user');
Route::get('/park/now', [UserController::class,'index'])->name('user.home');


//user



//admin
Route::get('/Admin/Login',[AuthController::class,'adminlogin'])->name('login.page');
Route::post('/Admin/Login/post',[AuthController::class,'login'])->name('admin.login');
Route::get('/Admin/Dashboard', [AdmController::class,'admindashbd'])->name('adm.dashboard');



