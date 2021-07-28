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
    return redirect()->intended('login');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    //logout
    Route::get('logout', 'IndexController@logout')->name('force.logout');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user', 'HomeController@getLogUserData')->name('home');


    //resident
    Route::resource('/resident','ResidentController');
    Route::get('/title', 'ResidentController@getTitle')->name('get.title');

    //Residence
    Route::resource('/residence','ResidenceController');

    //accommodation
    Route::resource('/accommodation', 'AccommodationController');
    Route::get('/accommodation_data', 'AccommodationController@getAccommodationData')->name('get.accommodation.data');

    //Invoice
    Route::resource('/invoice', 'InvoiceController');

});


