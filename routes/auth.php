<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('login/user')->group(function(){
    
    Route::get('/', [UserAuthController::class, 'create'])->name('user.login.form');

    Route::post('/', [UserAuthController::class, 'store'])->name('user.login');
});

Route::prefix('login/admin')->group(function(){
    
    Route::get('/',[AdminAuthController::class, 'create'])->name('admin.login.form');

    Route::post('/', [AdminAuthController::class, 'store'])->name('admin.login');
});
