<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);

Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/addToCart',[ProductController::class,'addToCart']);

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});

// To show the Cart
Route::get('/shoppingCart',[ProductController::class,'shoppingCart']);

// RemoveItem from cart
Route::get('/removeItem/{id}',[ProductController::class,'removeItem']);

//Oder Route
 Route::post('/shoppingCart',[ProductController::class,'orderNow']);


//Registration System
Route::get('/register', function () {
    
    return view('registration');
});

Route::post('/register',[ProductController::class,'register']);
