<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', function () {
    return view('index');
});


Route::get('/solution','SitefrontController@solution');
Route::post('/rv','SitefrontController@rv');
// Route::get('/acceuil','SitefrontController@acceuil');
Route::get('/apropos','SitefrontController@apropos');
Route::get('/domaine','SitefrontController@domaine');
Route::get('/contact','SitefrontController@contact');
Route::get('/formation','SitefrontController@formation');
Route::get('/projet','SitefrontController@projet');
Route::get('/expert','SitefrontController@expert');
Route::get('/formation/{detail}','SitefrontController@detailFormation');
Route::post('/inscription','MailController@sendinscrit');
Route::get('/cv','SitefrontController@curiculum');
Route::post('/email','MailController@sendemail');
Route::post('/emailrv','MailController@sendrv');
Route::post('/devis','MailController@devis');
Route::get('statistique','SitefrontController@stat');



/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
