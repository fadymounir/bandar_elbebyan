<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::name('admin.')->prefix('adminPanel')->middleware(['isAdmin'])->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::name('admins.')->controller(AdminsController::class)->group(function () {
        Route::get('/admins', 'index')->middleware('hasPermission:listening-admins')->name('index');
        Route::post('/admins/createAdmin', 'createAdmin')->middleware('hasPermission:create-admin')->name('create');
        Route::post('/admins/updateAdmin', 'updateAdmin')->middleware('hasPermission:update-admin')->name('update');
        Route::post('/admins/activation', 'activationAdmin')->middleware('hasPermission:update-admin')->name('activation');
        Route::post('/admins/getAdminInfo', 'getAdminInfo')->middleware('hasPermission:listening-admins')->name('getAdminInfo');
    });

    Route::name('roles.')->controller(UsersController::class)->group(function () {
        Route::get('/roles', 'index')->middleware('hasPermission:listening-users')->name('index');
    });

    Route::name('users.')->controller(UsersController::class)->group(function () {
        Route::get('/users', 'index')->middleware('hasPermission:listening-users')->name('index');
        Route::post('/users/createUser', 'createUser')->middleware('hasPermission:create-user')->name('create');
        Route::post('/users/updateUser', 'updateUser')->middleware('hasPermission:update-user')->name('update');
        Route::post('/users/activation', 'activationUser')->middleware('hasPermission:update-user')->name('activation');
        Route::post('/users/getUserInfo', 'getUserInfo')->middleware('hasPermission:listening-users')->name('getUserInfo');
    });

    Route::name('categories.')->controller(CategoriesController::class)->group(function () {
        Route::get('/categories', 'index')->middleware('hasPermission:listening-categories')->name('index');
        Route::post('/categories/createCategory', 'createCategory')->middleware('hasPermission:create-category')->name('create');
        Route::post('/categories/updateCategory', 'updateCategory')->middleware('hasPermission:update-category')->name('update');
        Route::post('/categories/activation', 'activationCategory')->middleware('hasPermission:update-category')->name('activation');
        Route::post('/categories/getCategoryInfo', 'getCategoryInfo')->middleware('hasPermission:listening-category')->name('getCategoryInfo');
    });


});
