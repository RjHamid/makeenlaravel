<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function list($id= null){
        if ($id) {
        $orders= DB::table('orders')->where('id', $id)->first();            
        } else {
            $orders = DB::table('orders')->orderBy('id', 'desc')
            ->paginate(2);
            
        }
        return response()->json($orders);
    }
    public function store(Request $request){
      $store = DB::table('orders')->insert($request->toArray());
      return response()->json($store);
    }
    public function edit(Request $request, $id){
        $orders = DB::table('orders')->where('id', $id)->update($request->toArray());
    }
    public function delete($id){
        $orders = DB::table('orders')->where('id', $id)->delete();
    }
}
