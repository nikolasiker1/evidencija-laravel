<?php

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

Route::resource('zaposleni', 'ZaposleniController');
Route::resource('usluge', 'UslugeController');
Route::resource('naplate', 'NaplateController', ['except' => 'create']);

Route::get('naplate/create/{id}', [
    'as' => 'naplate.create',
    'uses' => 'NaplateController@create',
]);

Route::post('naplate/store/{id_usluge}', [
    'as' => 'naplate.store',
    'uses' => 'NaplateController@store',
]);

Route::get('/', function () {
    return view('home');
});
