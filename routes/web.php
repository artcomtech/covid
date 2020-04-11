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

Route::get('/', 'Frontend\IndexController@index')->name('beranda');

Route::get('/faq', 'Frontend\FaqController@index')->name('faq');

Route::get('berita','Frontend\BeritaController@index')->name('beritafront.index');
Route::get('berita/{berita}','Frontend\BeritaController@show')->name('beritafront.detail');
Route::get('laporan','Frontend\SampleController@laporan')->name('pers.index');
Route::get('infografik','Frontend\InfografikController@index')->name('infografik.index');
Route::get('infografik/{id}','Frontend\InfografikController@show')->name('infografik.show');
Route::get('pencegahan','Frontend\SampleController@pencegahan')->name('pencegahan.index');
Route::get('dokumen','Frontend\DokumenController@index')->name('dokumen.index');
Route::get('dokumen/{id}','Frontend\DokumenController@show')->name('dokumen.show');
