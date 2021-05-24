<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

  $pathF = public_path('Naturbilder');

  $filesInFolder = \File::files($pathF);
    foreach($filesInFolder as $path) {
         $file = pathinfo($path);
         $filenames[] = $file["filename"];
       }
         // dd($filenames);
    return view('landingpage', compact('filenames'));
});

Route::get('test', function(){

  return view('templates/images');
});
