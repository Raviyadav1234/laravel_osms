<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\AssignWorkController;
use App\Http\Controllers\AssetsController;
use Illuminate\Support\Facades\Mail;
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

//Route::get('/user/email',[UserController::class,'email']);

Route::get('/', function () {

    return view('home');
  // $to = "Ravi Yadav";
  // $email = "raviyadav2017sln@gmail.com";
  // $data = ['name'=>"Hi ravi",'body'=>"testing purpose"];
  // mail::send('emails.testing',$data,function($message) use ($to,$email){
  //   $message->to($email)->subject("This is only testing purpose");
  // });
  // echo "email sent";
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



//admin protected route
  Route::get('/admin/assign-request', [AdminController::class,'assign_request'])->name('assign_request');
  Route::get('/admin/requester-delete', [AdminController::class,'requester_delete'])->name('requester_delete');
  Route::get('/admin/requester-view', [AdminController::class,'requester_view'])->name('requester_view');
  Route::post('/admin/requester-view', [AdminController::class,'assign_request_save'])->name('assign_request_save');
  Route::get('/admin/technician',[TechnicianController::class,'technician_view'])->name('technician_view');
  Route::get('/admin/technician-add',[TechnicianController::class,'technician_index'])->name('technician_index');
  Route::post('/admin/technician-add',[TechnicianController::class,'technician_save'])->name('technician_save');
  Route::get('/admin/technician-edit/{id}',[TechnicianController::class,'technician_edit'])->name('technician_edit');
  Route::post('/admin/technician-edit',[TechnicianController::class,'technician_update'])->name('technician_update');
  Route::get('/admin/technician-delete/{id}',[TechnicianController::class,'technician_delete'])->name('technician_delete');
  Route::get('/admin/assign-work',[AssignWorkController::class,'assign_work_view'])->name('assign_work_view');
  Route::get('/admin/assign-work-print/{id}',[AssignWorkController::class,'assign_work_print'])->name('assign_work_print');
  Route::get('/admin/assets-view',[AssetsController::class,'assets_view'])->name('assets_view');
  Route::get('/admin/assets-add',[AssetsController::class,'assets_index'])->name('assets_index');
  Route::post('/admin/assets-add',[AssetsController::class,'assets_save'])->name('assets_save');
  Route::get('/admin/assets-edit/{id}',[AssetsController::class,'assets_edit'])->name('assets_edit');
  Route::post('/admin/assets-edit',[AssetsController::class,'assets_update'])->name('assets_update');
  Route::get('/admin/assets-delete/{id}',[AssetsController::class,'assets_delete'])->name('assets_delete');
  Route::get('/admin/assets-sell/{id}',[AssetsController::class,'assets_sell'])->name('assets_sell');
  Route::post('/admin/assets-sell',[AssetsController::class,'assets_sell_save'])->name('assets_sell_save');




});


















