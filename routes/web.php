<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('user.login.form');
});

Route::get('/login/user', [UserAuthController::class, 'loginForm'])->name('user.login.form');
Route::post('/login', [UserAuthController::class, 'login'])->name('user.login');

Route::middleware(User::class)->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
