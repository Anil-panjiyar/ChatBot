<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
     public function show(){
        return view('same');

     }

      public function store(Request $request){
       // dd($request->all());
      // $data= $request->input();
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',

        // ]);
      $data = $request->input();
        //dd($data);

         try{
            //$post->name=data['name']
            $post= new Home();
            $post->email = $data['name'];

          $post->email =$data['email'];
          $post->save;
          echo"saved";

          }
          catch (Exception $e){
            echo "failed";


          }
      }
       public function edit($id){
        $data = Home::find($id);
        return view('editpage',compact('data','id'));

       }
}
