<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{

  public function index(){

    
       return view("welcome",
        [ 
            'articles' => Post::all()
        ]
   );
 }


  public function show(Post $post){

     return view('article',
            [
                'article'=>$post
            ]);
  } 

}
