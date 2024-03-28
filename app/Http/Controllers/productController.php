<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function list($id= null){
        if ($id) {
        $products= DB::table('products')->where('id', $id)->first();            
        } else {
            $products = DB::table('products')->orderBy('id', 'desc')
            ->paginate(2);
            
        }
        return response()->json($products);
    }
    public function store(Request $request){
      $store = DB::table('products')->insert($request->toArray());
      return response()->json($store);
    }
    public function edit(Request $request, $id){
        $product = DB::table('products')->where('id', $id)->update($request->toArray());
    }
    public function delete($id){
        $product = DB::table('products')->where('id', $id)->delete();
    }

}
