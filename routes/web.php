<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register-account', [UserController::class, 'registerIndex']);
Route::post('register-account', [UserController::class, 'register']);
Route::get('/complete_registration', [UserController::class, 'emailVerified']);

Route::get('login/forgot-password', [ForgotPasswordController::class, 'index']);

Route::get('market',[MarketController::class,'index']);
Route::get('contact-us',[ContactController::class,'publicIndex']);

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('logout', [AuthController::class, 'logout']);

        Route::get('admin/dashboard', [DashboardController::class, 'index']);

        Route::get('admin/users', [UserController::class, 'index']);
        Route::get('admin/users/data', [UserController::class, 'userDataAjax']);
        Route::get('admin/users/add', [UserController::class, 'addUserIndex']);
        Route::post('admin/users/add', [UserController::class, 'save']);
        Route::get('admin/users/data/{id}', [UserController::class, 'viewUserData']);
        

        Route::group(['prefix' => 'admin/settings'], function () {
            Route::get('/', [SettingController::class, 'index']);
            Route::get('/app-settings', [SettingController::class, 'appSettingIndex']);
            Route::get('/change-password', [PasswordController::class, 'index']);
        });

        Route::get('admin/profile', [ProfileController::class, 'index']);
        Route::get('admin/profile/edit-profile', [ProfileController::class, 'editProfileIndex']);
        Route::post('admin/profile/edit-profile/{id}', [ProfileController::class, 'updateProfile']);
        Route::get('admin/chat', [ChatController::class, 'index']);
        Route::get('admin/contact_us',[ContactController::class, 'adminIndex']);
        Route::get('admin/contact_us/data', [ContactController::class, 'contactDataAjax']);
        Route::get('admin/contact_us/data/delete/{id}', [ContactController::class, 'deleteContact']);

        Route::get('admin/email/send-email', [EmailController::class, 'sendEmailIndex']);
        Route::get('admin/email/compose',[EmailController::class, 'composeEmailIndex']);
    }
);