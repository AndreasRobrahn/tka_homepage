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
    return view('landingpage3', compact('filenames'));
})->name('landingpage');


Route::view('/impressum','impressum')->name('impressum');
Route::post('/sendNotification', 'App\Http\Controllers\NotificationsController@CustomerNotification')->name('notification.customer');

Route::get('/projects/TeamYak', function(){
  return view('teamyak');
})->name('teamyak.landingpage');
Route::get('/projects/TeamYak/home', function(){
  return view('homeTeamYak');
})->name('teamyak.news');
Route::get('/abouts', function(){
  return view('aboutus_TeamYak');
})->name('teamyak.abouts');
// Route::get('/projects/Unikat', function(){
//   return view('unikat');
// })->name('unikat');
// Route::get('/projects/Unikat/aboutus', function(){
//   return view('unikataboutus');
// })->name('unikataboutus');
// Route::get('/projects/Unikat/advantages', function(){
//   return view('unikatSpeciality');
// })->name('unikatSpeciality');
// Route::get('/projects/Unikat/datasecurity', function(){
//   return view('dsvgo1');
// })->name('datasecurity');
// Route::get('/projects/Unikat/joboffers', function(){
//   return view('joboffers');
// })->name('joboffers');
Route::get('/cookiesAccept', 'App\Http\Controllers\NotificationsController@setCookies');

Route::get('/gallerys', function(){
  return view('gallerys');
})->name("gallerys");
Route::get('/dataprivacy', function(){
  return view('dsvgo1');
})->name("dataprivacy");

Route::get('examples', function(){
  return view('examples');
})->name("examples");
Route::get('/training', function(){
  return view('training');
})->name("training");
Route::get('test', function(){
  return view('eros/general_layout');
});
Route::get('/eros/agb', function(){
  return view('eros/AGB');
})->name('agb');

Route::get('/eros/datenschutz', function(){
  return view('eros/DatenschutzIndex');
})->name('datenschutz');

Route::get('/eros/start', function(){
  return view('eros/Home');
})->name('home');

Route::get('/eros/aboutMe', function(){
  return view('eros/ProfileShow');
})->name('aboutMe');

Route::view('/sto','sto_landingpage');
Route::view('/hejo','hejo');
Route::view('/hejo','hejoDB');
Route::view('/girls','CamGirlz.landingpage2Girlz');
Route::view('/girls/videochat','CamGirlz.CamGirlzVideochat')->name('videoChat');
Route::view('/frank/imgupload','FrankR.pictureUpload')->name('pictureUpload');
Route::post('/frank/imgupload/post','App\Http\Controllers\pictureController@uploadImage')->name('pictureUpload.post');
Route::get('/frank/changeImg/{newthumb}/{oldthumb}','App\Http\Controllers\pictureController@changeFrontPicture')->name('change.picTure.front');
Route::get('/frank/gallerys/delete/{id}','App\Http\Controllers\pictureController@deleteGallery')->name('gallerys.delete');
Route::get('/frank/gallerys/pic/delete/{id}','App\Http\Controllers\pictureController@deleteGallery')->name('picture.delete');
Route::view('/frank/gallerys','FrankR.Gallerys')->name('frontend.gallerys');
Route::view('/girls/videochat','CamGirlz.CamGirlzVideochat')->name('GallerysIndex');
Route::view('/girls/videochat','CamGirlz.CamGirlzVideochat')->name('Gallery');
Route::view('/girls/videochat','CamGirlz.CamGirlzVideochat')->name('GallerysIndex');


//Bistro Mandana Page

Route::view('/bistroM/','BistroMandana.BistroMandana_landingpage')->name('BM');
