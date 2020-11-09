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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::patch('/preferences/{id}',[
    'as' => 'user.preferences.update',
    'uses' => 'UserController@update'
]);

Route::get('/api/bikes', 'api\BikeController@index')->name('bikes');
Route::get('/api/list', 'api\BikeController@indexHtml')->name('list');
Route::get('/login', 'api\BikeController@indexHtml')->name('login');
Route::get('/api/consult', 'api\BikeController@consultHtml')->name('consult');
Route::post('/api/actionbike', 'api\BikeController@actionBike')->name('actionbike');
Route::get('/api/create', 'api\BikeController@createHtml')->name('create');
Route::post('/api/store', 'api\BikeController@store')->name('store');

