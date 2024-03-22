<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
   public function creat() {
        return view('products/creat');
    }
   public function edit($id) {

        $products = DB::table('products')->where('id', $id)->first();
        return view('products.edit', ['products' => $products]);
    }
  public function list() {
        $products = DB::table('products')->get();
        return view('products.list', ["products" => $products]);
       }
      public function creatt(Request $request) {
        DB::table('products')->insert([
            "name" => $request->name,
            "price" => $request->price,
        ]);
        return redirect(route('products.creat'));
        }
       public function editt(Request $request, $id) {

            DB::table('products')->where('id', $id)->update([
                "name" => $request->name,
            "price" => $request->price,
            
            ]);
        
            return redirect('/products/list');
        }
       public function delete($id) {

            DB::table('products')->where('id', $id)->delete();
        
            return redirect('/products/list');
        }
}
