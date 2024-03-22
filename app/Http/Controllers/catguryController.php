<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catguryController extends Controller
{
   public function creat(){
        return view('catgury/create');
    }
   public function edit($id) {

        $catgury = DB::table('catgury')->where('id', $id)->first();
        return view('catgury.edit', ['catgury' => $catgury]);
    
    }
   public function list() {
        $catgury = DB::table('catgury')->get();
        return view('catgury.list', ["catgury" => $catgury]);
       
       }
      public function creatt(Request $request) {
        DB::table('catgury')->insert([
            "category_name" => $request->category_name,
            "description" => $request->description,
        ]);
        return redirect(route('catgury.creat'));
        }
       public function editt(Request $request, $id) {

            DB::table('catgury')->where('id', $id)->update([
                "category_name" => $request->category_name,
                "description" => $request->description,
            ]);
        
            return redirect('/catgury/list');
        }
       public function delete($id) {

            DB::table('catgury')->where('id', $id)->delete();
        
            return redirect('/catgury/list');
        }
}
