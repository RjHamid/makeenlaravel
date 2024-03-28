<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function creat () {
        return view('users/creat');
    }
   public function edit($id) {

        $users = DB::table('users')->where('id', $id)->first();
        return view('users.edit', ['users' => $users]);
    }
  public function list() {
        $users = DB::table('users')->get();
        return view('users.list', ["users" => $users]);
       }
      public function creatt(Request $request) {
        DB::table('users')->insert([
            "FirstName" => $request->FirstName,
            "LastName" => $request->LastName,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        return redirect(route('user.creat'));
        }
       public function editt(Request $request, $id) {
    
            DB::table('users')->where('id', $id)->update([
                "FirstName" => $request->FirstName,
            "LastName" => $request->LastName,
            "email" => $request->email,
            "password" => $request->password,
            
            ]);
        
            return redirect('/users/list');
        }
       public function delete($id) {

            DB::table('users')->where('id', $id)->delete();
        
            return redirect('/users/list');
        }
  
}

