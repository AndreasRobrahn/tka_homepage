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

Route::view('/impressum','impressum')->name('impressum');
Route::post('/sendNotification', 'App\Http\Controllers\NotificationsController@CustomerNotification')->name('notification.customer');

Route::get('/projects/TeamYak', function(){
  return view('teamyak');
});
Route::get('/projects/Unikat', function(){
  return view('unikat');
})->name('unikat');
Route::get('/projects/Unikat/aboutus', function(){
  return view('unikataboutus');
})->name('unikataboutus');
Route::get('/projects/Unikat/advantages', function(){
  return view('unikatSpeciality');
})->name('unikatSpeciality');
Route::get('/projects/Unikat/datasecurity', function(){
  return view('dsvgo1');
})->name('datasecurity');
Route::get('/projects/Unikat/joboffers', function(){
  return view('joboffers');
})->name('joboffers');
Route::get('/cookiesAccept', 'App\Http\Controllers\NotificationsController@setCookies');

Route::get('test', function(){



});
