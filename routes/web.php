<?php

use App\Http\Controllers\catguryController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\postController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// User Routs
Route::get('/users/create', [UserController::class, 'creat']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::get('/users/list', [UserController::class, 'list'])->name('users.list');
   // users Post Routes
   Route::post('/users/create', [UserController::class, 'creatt'])->name('user.creat');
    
    Route::post('/users/edit/{id}', [UserController::class, 'editt'])->name('user.edit');
    
    // users Delete Route
    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

// Product Get Routes
Route::get('/products/create', [productsController::class, 'creat']);

Route::get('/products/edit/{id}', [productsController::class, 'edit']);

Route::get('/products/list', [productsController::class, 'list'])->name('products.list');

// Product Post Routes
Route::post('/products/create', [productsController::class, 'creatt'])->name('products.creat');

Route::post('/products/edit/{id}', [productsController::class, 'editt'])->name('products.edit');

// Products Delete Route
Route::delete('/products/delete/{id}', [productsController::class, 'delete'])->name('products.delete');
// orders Get Routes
Route::get('orders/create', [ordersController::class, 'creat']);


Route::get('/orders/edit/{id}', [ordersController::class, 'edit']);

Route::get('/orders/list', [ordersController::class, 'list'])->name('orders.list');

// orders Post Routes
Route::post('/orders/create', [ordersController::class, 'creatt'])->name('orders.creat');

Route::post('/orders/edit/{id}', [ordersController::class, 'editt'])->name('orders.edit');

// orders Delete Route
Route::delete('/orders/delete/{id}', [ordersController::class, 'delete'])->name('orders.delete');
// catgury Get Routes
Route::get('catgury/create', [catguryController::class, 'creat']);


Route::get('/catgury/edit/{id}', [catguryController::class, 'edit']);

Route::get('/catgury/list', [catguryController::class, 'list'])->name('catgury.list');

// catgury Post Routes
Route::post('/catgury/create', [catguryController::class, 'creatt'])->name('catgury.creat');

Route::post('/catgury/edit/{id}', [catguryController::class, 'editt'])->name('catgury.edit');

// catgury Delete Route
Route::delete('/catgury/delete/{id}', [catguryController::class, 'delete'])->name('catgury.delete');

// post Get Routes
Route::get('post/create', [postController::class,'creat']);


Route::get('/post/edit/{id}', [postController::class, 'edit']); 


Route::get('/post/list', [postController::class, 'list'])->name('post.list');

// post Post Routes
Route::post('/post/create', [postController::class, 'creatt'])->name('post.creat');

Route::post('/post/edit/{id}', [postController::class, 'editt'])->name('post.edit');

// post Delete Route
Route::delete('/post/delete/{id}', [postController::class, 'delete'])->name('post.delete');
