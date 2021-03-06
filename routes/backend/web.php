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


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/','Admin\DashboardController@index');
    Route::get('/dashboard','Admin\DashboardController@index');

    Route::resource('berita','Admin\BeritaController');

    Route::resource('tentang','Admin\TentangController');

    Route::resource('covid','Admin\CovidController');

    Route::resource('infografik','Admin\InfografikController');

    Route::resource('pers','Admin\PersController');

    Route::resource('dokumen','Admin\DokumenController');

    Route::resource('footerimage','Admin\FooterImageController');

    Route::resource('kontak','Admin\KontakController');
});
