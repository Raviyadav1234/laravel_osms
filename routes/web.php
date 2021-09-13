<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Auth::routes();

//protected route
Route::group(['middleware'=>['auth']] ,function(){
  Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


// user protected route
Route::post('/dashboard', [UserController::class, 'user_profile_update'])->name('user_profile_update');
Route::get('/user/submit-request',[UserController::class,'submit_request'])->name('submit_request');
Route::post('/user/submit-request',[UserController::class,'store_submit_request'])->name('store_submit_request');
Route::get('/user/check-status',[UserController::class,'check_status'])->name('check_status');
Route::get('/user/change-password',[UserController::class,'change_password'])->name('change_password');
Route::post('/user/change-password',[UserController::class,'change_password_update'])->name('change_password_update');

Route::get('/user/email',[UserController::class,'email'])->name('email');


//admin protected route
  Route::get('/admin/assign-request', [AdminController::class,'assign_request'])->name('assign_request');
  Route::get('/admin/requester-delete', [AdminController::class,'requester_delete'])->name('requester_delete');
  Route::get('/admin/requester-view', [AdminController::class,'requester_view'])->name('requester_view');
  Route::post('/admin/requester-view', [AdminController::class,'assign_request_save'])->name('assign_request_save');


});


















