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
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/title', 'ResidentController@getTitle')->name('get.title');
    Route::get('/accommodation_data', 'HomeController@getAccomodationData')->name('get.accommodation.data');

    //resident
    Route::post('/resident', 'ResidentController@saveResident')->name('save.resident');
    Route::put('/resident/{id}', 'ResidentController@updateResident')->name('update.resident');
    Route::get('/resident/{id}', 'ResidentController@getResident')->name('update.resident');
    Route::get('/resident', 'ResidentController@getAllResident')->name('get.all.resident');

    //Residence
    Route::post('/residence', 'ResidenceController@saveResidence')->name('save.residence');
    Route::put('/residence/{id}', 'ResidenceController@updateResidence')->name('update.residence');
    Route::get('/residence/{id}', 'ResidenceController@getResidence')->name('update.residence');
    Route::get('/residence', 'ResidenceController@getAllResidence')->name('get.all.residence');

    //accommodation
    Route::post('/accommodation', 'HomeController@saveResidence')->name('save.accommodation');
    Route::put('/accommodation/{id}', 'HomeController@updateResidence')->name('update.accommodation');
    Route::get('/accommodation/{id}', 'HomeController@getResidence')->name('update.accommodation');
    Route::get('/accommodation', 'HomeController@getAllResidence')->name('get.all.accommodation');
});


