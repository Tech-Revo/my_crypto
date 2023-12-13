<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[IndexController::class,'index']);

Route::get('login',[AuthController::class,'index']);
Route::get('login/forgot-password', [ForgotPasswordController::class, 'index']);

Route::get('admin/dashboard',[DashboardController::class,'index']);

Route::group(['prefix'=>'admin/settings'],function(){
    Route::get('/',[SettingController::class,'index']);
    Route::get('/change-password', [PasswordController::class, 'index']);
    
});