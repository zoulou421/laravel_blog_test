<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//this is how you can build and api. Go to your browser and write: // http://localhost:8080/api/posts to see the results
Route::get('/posts',function(){

   return response()->json([

      'posts'=>[

          [
            'title'=>'Post One'
          ]
     ]
   ]);

});
