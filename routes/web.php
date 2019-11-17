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

Route::get('/', 'ViewController@index');

// Route::prefix('simulasi')->group(function(){
Route::get('/simulasiGadai', 'ViewController@simulasiGadai');
Route::get('/simulasiBeliEmas', 'ViewController@simulasiBeliEmas');
Route::get('/simulasiKreditAmanah', 'ViewController@simulasiKreditAmanah');
// });

Route::prefix('produk')->group(function(){
  Route::get('/', 'ViewController@produk');
});

Route::prefix('info_harga_pasar')->group(function(){
  Route::get('/', 'ViewController@info_harga_pasar');
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/', function(){
      return view('index');
    });
    Route::group(['prefix' => 'produk'], function () {
      Route::get('/', 'ProdukController@index');
    });
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
