<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\manageUserController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\ManageParkingController;
use App\Http\Controllers\BookingHistoryController;
use Illuminate\Support\Facades\View;

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


Route::get('/', function (){
    return view('FrontPage');
});

//userAuth
Route::get('/user/registration',[userAuthController::class,'registration'])->name('user.registration');
Route::post('/user/register',[userAuthController::class,'register'])->name('register.user');
Route::get('/user/login',[userAuthController::Class,'login'])->name('user.login');
Route::post('/user/store',[userAuthController::Class,'store'])->name('store.user');
Route::get('/logout', [userAuthController::class,'logout'])->name('user.logout');

//userController
Route::get('/park/now', [UserController::class,'index'])->name('user.home')->middleware('auth');
Route::get('/user/dashboard', [UserController::class,'dashboard'])->name('user.dashboard')->middleware('auth');
Route::get('/available/parking/space',[UserController::class,'create'])->name('available.parkings');
Route::post('/store/parkings',[UserController::class,'store'])->name('store.parkings');

//admin
Route::get('/Admin/Login',[AuthController::class,'adminlogin'])->name('login.page');
Route::post('/Admin/Login/post',[AuthController::class,'login'])->name('admin.login');
Route::get('/Admin/Dashboard', [AdmController::class,'admindashbd'])->name('adm.dashboard');
Route::post('store/parkings/data',[AdmController::class,'store'])->name('spaces.store');

//manageparking
Route::get('/add/parkings',[ManageParkingController::class,'index'])->name('add.parking');


//manageUser
Route::get('/Manage/User',[manageUserController::class,'index'])->name('manage.user');
Route::get('/Delete/user/{id}',[manageUserController::class,'destroy'])->name('delete.user');

//Booking History
Route::match(['get', 'post'], 'Booking/History/',[BookingHistoryController::class,'index'])->name('booking.history');