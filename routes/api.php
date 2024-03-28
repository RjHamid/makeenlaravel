<?php

use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix'=> 'users', 'as'=> 'users.'], function(){
Route::get('list/{id?}', [UsersController::class, 'list'])->name('list');
Route::post('store' , [UsersController::class, 'store'])->name('store');
Route::put('edit/{id}' , [UsersController::class, 'edit'])->name('edit');
Route::delete('delete/{id}' , [UsersController::class, 'delete'])->name('delete');
});
Route::group(['prefix'=> 'products', 'as'=> 'products.'], function(){
    Route::get('list/{id?}', [productController::class, 'list'])->name('list');
    Route::post('store' , [productController::class, 'store'])->name('store');
    Route::put('edit/{id}' , [productController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}' , [productController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix'=> 'orders', 'as'=> 'orders.'], function(){
        Route::get('list/{id?}', [orderController::class, 'list'])->name('list');
        Route::post('store' , [orderController::class, 'store'])->name('store');
        Route::put('edit/{id}' , [orderController::class, 'edit'])->name('edit');
        Route::delete('delete/{id}' , [orderController::class, 'delete'])->name('delete');
        });