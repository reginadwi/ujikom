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

Route::get('/admin', function () {
    return view('layouts.admin');

});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function () {
        Route::get('/','AdminController@index');
        //rm
        route::resource('/rm','RmController');
        route::get('rm', 'RmController@index');
        route::post('rm-store', 'RmController@store');
        Route::get('/rm/{id}/edit', 'RmController@edit');

        //pasien
        route::resource('/pasien','PasienController');
        route::get('/pasien', 'PasienController@index');
        route::post('pasien-store', 'PasienController@store');
        Route::get('/pasien/{id}/edit', 'PasienController@edit');
        Route::delete('/pasien-destroy/{id}', 'PasienController@destroy');

        //obat
        route::resource('/obat','ObatController');
        route::get('/obat', 'ObatController@index');
        route::post('obat-store', 'ObatController@store');
        Route::get('/obat/{id}/edit', 'ObatController@edit');
        Route::delete('/obat-destroy/{id}', 'ObatController@destroy');

        //perawatan
        route::resource('/perawatan','PerawatanController');
        route::get('/perawatan', 'PerawatanController@index');
        route::post('perawatan-store', 'PerawatanController@store');
        Route::get('/perawatan/{id}/edit', 'PerawatanController@edit');
        Route::delete('/perawatan-destroy/{id}', 'PerawatanController@destroy');

        //persalinan
        route::resource('/persalinan','PersalinanController');
        route::get('/persalinan', 'PersalinanController@index');
        route::post('persalinan-store', 'PersalinanController@store');
        Route::get('/persalinan/{id}/edit', 'PersalinanController@edit');
        Route::delete('/persalinan-destroy/{id}', 'PersalinanController@destroy');

          //persalinan
        route::resource('/hamil','HamilController');
        route::get('/hamil', 'HamilController@index');
        route::post('hamil-store', 'HamilController@store');
        Route::get('/hamil/{id}/edit', 'HamilController@edit');
        Route::delete('/hamil-destroy/{id}', 'HamilController@destroy');

        //kumpulan
        route::resource('rm', 'RmController');
        route::resource('pasien', 'PasienController');
        route::resource('obat', 'ObatController');
        route::resource('perawatan', 'PerawatanController');
        route::resource('persalinan', 'PersalinanController');
        route::resource('hamil', 'HamilController');


       }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
