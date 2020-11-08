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

Route::get('/api/listar', 'api\BikeController@indexHtml')->name('listar');
Route::get('/api/consultar', 'api\BikeController@consultarHtml')->name('consultar');
Route::post('/api/acaobike', 'api\BikeController@actionBike')->name('acaobike.byid');
Route::post('/api/criar', 'api\BikeController@criarHtml')->name('criar');

