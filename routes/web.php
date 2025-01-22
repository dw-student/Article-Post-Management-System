<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;



Route::middleware('isLogin')->group(function(){


    Route::get('/admin/index',[AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/create',[AdminController::class, 'create'])->name('admin.create');

    Route::post('/admin/store',[AdminController::class, 'store'])->name('admin.store');

    Route::get('/admin/show/{id}',[AdminController::class, 'show'])->name('admin.show');

    Route::get('/admin/edit/{id}',[AdminController::class, 'edit'])->name('admin.edit');

    Route::post('/admin/update/{id}',[AdminController::class, 'update'])->name('admin.update');


    Route::get('/admin/delete/{id}',[AdminController::class, 'destroy'])->name('admin.destroy');

});

Route::get('/',[FrontendController::class, 'index'])->name('index');






Route::get('/register',[AuthController::class,'register'])->name('register');

Route::post('/store',[AuthController::class,'register_store'])->name('register.store');


Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/login/store',[AuthController::class,'login_store'])->name('login.store');

// Route::get('/layout/dashboard',[AuthController::class,'dashboard'])->name('layout.dashboard');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

