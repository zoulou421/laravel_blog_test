<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('{post}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('/greatings/hello', function(){

       return Response('<h1>hello world</h1>', 200)
                     ->header('Content-Type', 'text/plain');
});


Route::get('/dossier/{id}', function($id){

       return Response('Dossier'.$id);
})->where('id','[0-9]+');

Route::get('/search/get', function(Request $request){
     dd($request);
});