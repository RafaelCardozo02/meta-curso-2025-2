<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontendController;


// Frontend
Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');

// Admin
Route::middleware('admin')->prefix('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});


Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
    Route::post('/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');
    Route::get('/forgot-password', [AdminController::class, 'forgot_password'])->name('admin_forgot_password');
    Route::post('/forgot-password', [AdminController::class, 'forgot_password_submit'])->name('admin_forgot_password_submit');
    Route::get('/password-reset/{token}/{email}', [AdminController::class, 'admin_reset_password']);
    Route::post('/password-reset/{token}/{email}', [AdminController::class, 'admin_reset_password_submit'])->name('reset_password_submit');
});


// User
Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [UserController::class, 'dashbaord'])->name('user_dashboard');
});

Route::get('/register', [UserController::class, 'register'])->name('user_register');
Route::post('/register-submit', [UserController::class, 'register_submit'])->name('user_register_submit');
Route::get('/verify-email/{token}/{email}', [UserController::class, 'email_verification']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-submit', [UserController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [UserController::class, 'user_forgot_password'])->name('user_forgot_password');
Route::post('/forgot-password', [UserController::class, 'forgot_password_submit'])->name('forgot_password_submit');
Route::get('/password-reset/{token}/{email}', [UserController::class, 'password_reset']);
Route::post('/password-reset/{token}/{email}', [UserController::class, 'reset_password_submit'])->name('user_reset_password_submit');
