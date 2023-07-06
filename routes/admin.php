<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::name('dashboard.')->prefix('dashboard')->middleware(['isAdmin'])->group(function () {

    Route::get('/', [HomeController::class,'index']);

    Route::get('/users',[UsersController::class,'index'])->name('admin.users.index');



});
