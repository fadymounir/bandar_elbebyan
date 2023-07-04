<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::name('dashboard.')->prefix('dashboard')->middleware(['isAdmin'])->group(function () {

    Route::get('/', [HomeController::class,'index']);




});
