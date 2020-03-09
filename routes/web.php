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
      Route::get('/data', 'ProdukController@data')->name('produk.data');
      Route::get('/create', 'ProdukController@create');
      Route::post('/store', 'ProdukController@store');
      Route::get('/delete/{id}', 'ProdukController@delete');
      Route::get('/edit/{id}', 'ProdukController@edit');
      Route::post('/update/{id}', 'ProdukController@update');
    });
    Route::group(['prefix' => 'sub_produk'], function () {
      Route::get('/{id}', 'SubProdukController@index');
      Route::get('/data/{id}', 'SubProdukController@data');
      Route::get('/create/{id}', 'SubProdukController@create');
      Route::post('/store/{id}', 'SubProdukController@store');
      Route::get('/delete/{id}/{kode}', 'SubProdukController@delete');
      Route::get('/edit/{id}', 'SubProdukController@edit');
      Route::post('/update/{id}', 'SubProdukController@update');
    });
    Route::group(['prefix' => 'syarat_fitur'], function () {
      Route::get('/index/{id}/{kode}', 'SyaratFiturController@index');
      Route::get('/data_fitur/{id}', 'SyaratFiturController@data_fitur');
      Route::get('/data_syarat/{id}', 'SyaratFiturController@data_syarat');
      Route::get('/create_fitur/{id}/{kode}', 'SyaratFiturController@create_fitur');
      Route::get('/create_syarat/{id}/{kode}', 'SyaratFiturController@create_syarat');
      Route::post('/store_syarat/{id}/{kode}', 'SyaratFiturController@store_syarat');
      Route::post('/store_fitur/{id}/{kode}', 'SyaratFiturController@store_fitur');
      Route::get('/delete_syarat/{id}/{kode}/{kode2}', 'SyaratFiturController@delete_syarat');
      Route::get('/delete_fitur/{id}/{kode}/{kode2}', 'SyaratFiturController@delete_fitur');
      Route::get('/edit_syarat/{id}/{kode}/{kode2}', 'SyaratFiturController@edit_syarat');
      Route::get('/edit_fitur/{id}/{kode}/{kode2}', 'SyaratFiturController@edit_fitur');
      Route::post('/update_syarat/{id}/{kode}/{kode2}', 'SyaratFiturController@update_syarat');
      Route::post('/update_fitur/{id}/{kode}/{kode2}', 'SyaratFiturController@update_fitur');
    });
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

Route::get('/getHargaEmas','PdsController@getHargaEmas');
