<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\GeneralController;
use App\Http\Controllers\Website\RegistrationController;
use App\Http\Controllers\Website\User\MemberController;
use App\Http\Controllers\Website\Product\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GeneralController::class, 'index'])->name('welcome');
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
Route::get('/getAllCategories', [GeneralController::class, 'getAllCategories'])->name('getAllCategories');
Route::get('/loginForm', [RegistrationController::class, 'loginForm'])->name('loginForm');
Route::get('/recover-password', [RegistrationController::class, 'recoverPassword'])->name('recover-password');
Route::post('/signIn', [RegistrationController::class, 'signIn'])->name('signIn');
Route::post('/forgot', [RegistrationController::class, 'forgotPost'])->name('forgot');
Route::get('/registeruser', [RegistrationController::class, 'create'])->name('create');
Route::post('/registeruser', [RegistrationController::class, 'store'])->name('store');
Route::get('/my-account', [MemberController::class, 'index'])->name('my-account');
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::get('/signout', [RegistrationController::class, 'signOut'])->name('signOut');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
