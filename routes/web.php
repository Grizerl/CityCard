<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Dashboard\Admin\AdminDashboard;
use App\Http\Controllers\Dashboard\User\UserDashboard;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('user.login.form');
});

Route::prefix('admin')->middleware(Admin::class)->group(function(){

    Route::get('dashboard', [AdminDashboard::class, 'home'])->name('admin.dashboard');
});

Route::prefix('user')->middleware(User::class)->group(function(){

    Route::get('dashboard', [UserDashboard::class, 'home'])->name('user.dashboard');

    Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
});


require __DIR__.'/auth.php';