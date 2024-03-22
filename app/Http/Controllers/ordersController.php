<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ordersController extends Controller
{
   public function creat(){
        return view('orders/create');
    }
   public function edit($id) {

        $orders = DB::table('orders')->where('id', $id)->first();
        return view('orders.edit', ['orders' => $orders]);
    
    }
   public function list() {
        $orders = DB::table('orders')->get();
        return view('orders.list', ["orders" => $orders]);
       
       }
      public function creatt(Request $request) {
        DB::table('orders')->insert([
            "orders_table" => $request->orders_table,
        ]);
        return redirect(route('orders.creat'));
        }
      public function editt(Request $request, $id) {

            DB::table('orders')->where('id', $id)->update([
                "orders_table" => $request->orders_table,
         
            
            ]);
        
            return redirect('/orders/list');
        }
       public function delete($id) {

            DB::table('orders')->where('id', $id)->delete();
        
            return redirect('/orders/list');
        }
}
