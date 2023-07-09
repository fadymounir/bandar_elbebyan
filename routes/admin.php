<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserAddressController;
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

    Route::name('user-address.')->controller(UserAddressController::class)->group(function () {
        Route::get('/users/addresses', 'index')->middleware('hasPermission:listening-users-addresses')->name('index');
        Route::post('/users/addresses/createUserAddress', 'createUserAddress')->middleware('hasPermission:create-user-address')->name('createUserAddress');
        Route::post('/users/addresses/updateUserAddress', 'updateUserAddress')->middleware('hasPermission:update-user-address')->name('updateUserAddress');
        Route::post('/users/addresses/deleteUserAddress', 'deleteUserAddress')->middleware('hasPermission:update-user-address')->name('deleteUserAddress');
        Route::post('/users/addresses/getUserAddressInfo', 'getUserAddressInfo')->middleware('hasPermission:listening-users-addresses')->name('getUserAddressInfo');
        Route::post('/users/addresses/getUserAddressDetails', 'getUserAddressDetails')->middleware('hasPermission:listening-users-addresses')->name('getUserAddressDetails');
    });


    Route::name('areas.')->controller(AreaController::class)->group(function () {
        Route::get('/areas', 'index')->middleware('hasPermission:listening-areas')->name('index');
        Route::post('/areas/createArea', 'createArea')->middleware('hasPermission:create-area')->name('createArea');
        Route::post('/areas/updateArea', 'updateArea')->middleware('hasPermission:update-area')->name('updateArea');
        Route::post('/areas/getAreaInfo', 'getAreaInfo')->middleware('hasPermission:listening-areas')->name('getAreaInfo');
        Route::post('/areas/activation', 'activationArea')->middleware('hasPermission:update-area')->name('activation');
    });

    Route::name('cities.')->controller(CityController::class)->group(function () {
        Route::get('/areas/{area_id}/cities', 'index')->middleware('hasPermission:listening-cities')->name('index');
        Route::post('/areas/{area_id}/cities/createCity', 'createCity')->middleware('hasPermission:create-city')->name('createCity');
        Route::post('/areas/{area_id}/cities/updateCity', 'updateCity')->middleware('hasPermission:update-city')->name('updateCity');
        Route::post('cities/getAreaCities', 'getAreaCities')->middleware('hasPermission:listening-cities')->name('getAreaCities');
        Route::post('/areas/{area_id}/cities/activation', 'activationCity')->middleware('hasPermission:update-city')->name('activation');
        Route::post('/areas/{area_id}/cities/getCityInfo', 'getCityInfo')->middleware('hasPermission:listening-cities')->name('getCityInfo');
    });

    Route::name('districts.')->controller(DistrictController::class)->group(function () {
        Route::get('/areas/{area_id}/cities/{city_id}/districts', 'index')->middleware('hasPermission:listening-districts')->name('index');
        Route::post('/areas/{area_id}/cities/{city_id}/districts/createDistrict', 'createDistrict')->middleware('hasPermission:create-district')->name('createDistrict');
        Route::post('/areas/{area_id}/cities/{city_id}/districts/updateDistrict', 'updateDistrict')->middleware('hasPermission:update-district')->name('updateDistrict');
        Route::post('/districts/getCityDistricts', 'getCityDistricts')->middleware('hasPermission:listening-districts')->name('getCityDistricts');
        Route::post('/areas/{area_id}/cities/{city_id}/getDistrictInfo', 'getDistrictInfo')->middleware('hasPermission:listening-districts')->name('getDistrictInfo');
        Route::post('/areas/{area_id}/cities/{city_id}/activation', 'activationDistrict')->middleware('hasPermission:update-district')->name('activation');
    });


    Route::name('categories.')->controller(CategoriesController::class)->group(function () {
        Route::get('/categories', 'index')->middleware('hasPermission:listening-categories')->name('index');
        Route::post('/categories/createCategory', 'createCategory')->middleware('hasPermission:create-category')->name('create');
        Route::post('/categories/updateCategory', 'updateCategory')->middleware('hasPermission:update-category')->name('update');
        Route::post('/categories/activation', 'activationCategory')->middleware('hasPermission:update-category')->name('activation');
        Route::post('/categories/getCategoryInfo', 'getCategoryInfo')->middleware('hasPermission:listening-categories')->name('getCategoryInfo');
    });


});
