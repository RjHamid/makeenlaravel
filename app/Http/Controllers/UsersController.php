<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function list($id= null){
        if ($id) {
        $users= DB::table('users')->where('id', $id)->first();            
        } else {
            $users = DB::table('users')->orderBy('id', 'desc')
            ->paginate(2);
            
        }
        return response()->json($users);
    }
    public function store(Request $request){
      $store = DB::table('users')->insert($request->toArray());
      return response()->json($store);
    }
    public function edit(Request $request, $id){
        $user = DB::table('users')->where('id', $id)->update($request->toArray());
    }
    public function delete($id){
        $user = DB::table('users')->where('id', $id)->delete();
    }

}
