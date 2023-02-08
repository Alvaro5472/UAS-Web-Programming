<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Models\Account;
use App\Models\Order;
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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/createAccount', [AccountController::class, 'createAccount'])->name('createAccount');
Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::post('/logUser', [AccountController::class, 'logUser'])->name('logUser');
Route::get('/logoutIndex', [Controller::class, 'logoutIndex'])->name('logoutIndex');

Route::middleware('auth')->group(function(){
    Route::get('/home', [ItemController::class, 'home'])->name('home');
    Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
    Route::get('/detail/{id}', [ItemController::class, 'details'])->name('details');
    Route::get('/cart', [OrderController::class, 'index'])->name('cart');
    Route::post('/addToCart', [OrderController::class, 'addToCart'])->name('addToCart');
    Route::delete('/deleteCart/{order}', [OrderController::class, 'deleteCart'])->name('deleteCart');
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/success', [OrderController::class, 'success'])->name('success');
    Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
    Route::post('/updateProfile', [AccountController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/saved', [AccountController::class, 'saved'])->name('saved');
});
Route::middleware('auth','admin')->group( function(){
    Route::get('/accountMaintenance', [AccountController::class, 'accountMaintenance'])->name('account');
    Route::get('/updateRolePage/{id}', [AccountController::class, 'updateRolePage'])->name('updateRolePage');
    Route::delete('/deleteAcc/{account}', [AccountController::class, 'deleteAcc'])->name('deleteAcc');
    Route::put('/updateRole', [AccountController::class, 'updateRole'])->name('updateRole');
});
