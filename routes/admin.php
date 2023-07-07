<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::name('admin.')->prefix('adminPanel')->middleware(['isAdmin'])->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::name('users.')->controller(UsersController::class)->group(function () {
        Route::get('/users', [UsersController::class, 'index'])->middleware('hasPermission:listening-users')->name('index');
    });




});
