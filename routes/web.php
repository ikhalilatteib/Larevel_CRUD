<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse ;

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

Route::get('/index','NewController@index');
Route::get('anasayfa','NewController@anasayfa');
Route::get('/kayit','NewController@createView');
Route::get('/listeleme','NewController@listView');
Route::post('/kaydet', 'NewController@create');
Route::get('/guncelle/{id}','NewController@updateView')->where(array('id'=>'[0-9]+'));
Route::post('/update/{id}','NewController@update');
Route::get('/islem','NewController@islem');
Route::get('/sil/{id}','NewController@delete')->where(array('id'=>'[0-9]+'));
