<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\TrademarkController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\UserController;



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
Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', [CategoryController::class, 'indexC']);

Route::get('doing', [ProductController::class, 'index']);

Route::get('contact', function () {
    return view('contact');
});

Route::get('test', function () {
    return view('test');
});

Route::get('edit/{id}',[UserController::class, 'editC']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'] );

    //Category admin dashboard
    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category/create', [CategoryController::class, 'create']);
    Route::post('category/save', [CategoryController::class, 'save']);
    Route::get('category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('category/update', [CategoryController::class, 'update']);

    Route::get('product', [ProductController::class, 'getProduct']);
    Route::get('product/create', [ProductController::class, 'addP']);
    Route::post('product/save', [ProductController::class, 'saveP']);
    Route::get('product/edit/{id}', [ProductController::class, 'editP']);
    Route::post('product/update', [ProductController::class, 'updateP']);
    Route::get('product/delete/{id}', [ProductController::class, 'deleteP']);

    Route::get('trademark', [TrademarkController::class, 'index']);
    Route::get('trademark/create', [TrademarkController::class, 'create']);
    Route::post('trademark/save', [TrademarkController::class, 'save']);
    Route::get('trademark/delete/{id}', [TrademarkController::class, 'delete']);
    Route::get('trademark/edit/{id}', [TrademarkController::class, 'edit']);
    Route::post('trademark/update', [TrademarkController::class, 'update']);
//Customer by Thien
    Route::get('customer', [CustomerController::class, 'index']);
    Route::get('customer/delete/{id}', [CustomerController::class, 'delete']);
    Route::get('customer/edit/{id}', [CustomerController::class, 'editC']);
    Route::post('customer/update', [CustomerController::class, 'updateC']);

    Route::get('users', [UserController::class, 'index']);
    Route::get('users/create', [UserController::class, 'create']);
    Route::post('users/save', [UserController::class, 'save']);
    Route::get('users/delete/{id}', [UserController::class, 'delete']);
    Route::get('users/edit/{id}', [UserController::class, 'editU']);
    Route::post('users/update', [UserController::class, 'updateU']);




});
