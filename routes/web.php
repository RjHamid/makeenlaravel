<?php

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
Route::get('/users/create', function () {
    return view('users/creat');
});
Route::get('/users/edit/{id}', function ($id) {

    $users = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ['users' => $users]);

});
Route::get('/users/list', function () {
    $users = DB::table('users')->get();
    return view('users.list', ["users" => $users]);
   
   });
   // users Post Routes
   Route::post('/users/create', function (Request $request) {
    DB::table('users')->insert([
        "FirstName" => $request->FirstName,
        "LastName" => $request->LastName,
        "email" => $request->email,
        "password" => $request->password,
    ]);
    return redirect('/users/create');
    });
    
    Route::post('/users/edit/{id}', function (Request $request, $id) {
    
        DB::table('users')->where('id', $id)->update([
            "FirstName" => $request->FirstName,
        "LastName" => $request->LastName,
        "email" => $request->email,
        "password" => $request->password,
        
        ]);
    
        return redirect('/users/list');
    });
    
    // users Delete Route
    Route::delete('/users/delete/{id}', function ($id) {

        DB::table('users')->where('id', $id)->delete();
    
        return redirect('/users/list');
    });

// Product Get Routes
Route::get('/products/create', function () {
    return view('products/creat');
});

Route::get('/products/edit/{id}', function ($id) {

    $products = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ['products' => $products]);

});

Route::get('/products/list', function () {
 $products = DB::table('products')->get();
 return view('products.list', ["products" => $products]);

});

// Product Post Routes
Route::post('/products/create', function (Request $request) {
DB::table('products')->insert([
    "name" => $request->name,
    "price" => $request->price,
]);
return redirect('/products/create');
});

Route::post('/products/edit/{id}', function (Request $request, $id) {

    DB::table('products')->where('id', $id)->update([
        "name" => $request->name,
    "price" => $request->price,
    
    ]);

    return redirect('/products/list');
});

// Products Delete Route
Route::delete('/products/delete/{id}', function ($id) {

    DB::table('products')->where('id', $id)->delete();

    return redirect('/products/list');
});
// orders Get Routes
Route::get('orders/create', function(){
    return view('orders/create');
});


Route::get('/orders/edit/{id}', function ($id) {

    $orders = DB::table('orders')->where('id', $id)->first();
    return view('orders.edit', ['orders' => $orders]);

});

Route::get('/orders/list', function () {
 $orders = DB::table('orders')->get();
 return view('orders.list', ["orders" => $orders]);

});

// orders Post Routes
Route::post('/orders/create', function (Request $request) {
DB::table('orders')->insert([
    "orders_table" => $request->orders_table,
]);
return redirect('/orders/create');
});

Route::post('/orders/edit/{id}', function (Request $request, $id) {

    DB::table('orders')->where('id', $id)->update([
        "orders_table" => $request->orders_table,
 
    
    ]);

    return redirect('/orders/list');
});

// orders Delete Route
Route::delete('/orders/delete/{id}', function ($id) {

    DB::table('orders')->where('id', $id)->delete();

    return redirect('/orders/list');
});