<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
   public function creat(){
        return view('post/create');
    }
   public function edit($id) {

        $post = DB::table('post')->where('id', $id)->first();
        return view('post.edit', ['post' => $post]);
    
    }
   public function list() {
        $post = DB::table('post')->get();
        return view('post.list', ["post" => $post]);
       
       }
      public function creatt(Request $request) {
        DB::table('post')->insert([
            "Write" => $request->Write,
            "Article" => $request->Article,
            "Descr" => $request->Descr,
        ]);
        return redirect(route('post.creat'));
        }
       public function editt(Request $request, $id) {

            DB::table('post')->where('id', $id)->update([
                "Write" => $request->Write,
                "Article" => $request->Article,
                "Descr" => $request->Descr,
            ]);
        
            return redirect('/post/list');
        }
       public function delete($id) {

            DB::table('post')->where('id', $id)->delete();
        
            return redirect('/post/list');
        }
}
