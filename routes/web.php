<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\UserController;
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
//user

Route::get('/user', [UserController::class,'index'])->name('user.home');


//admin
Route::get('/Admin/Login',[AuthController::class,'registration'])->name('login.page');
Route::post('/Admin/Login/post',[AuthController::class,'login'])->name('admin.login');
Route::get('/Admin/Dashboard', [AdmController::class,'admindashbd'])->name('adm.dashboard');



