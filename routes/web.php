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

Route::get('/', 'WebController@landing');
Route::get('/categories', 'WebController@categories');
Route::get('/horoscope', 'WebController@horoscope');
Route::get('/horoscope/{type}', 'WebController@horoscopeType');
Route::get('/myprofile', 'WebController@profile');
Route::get('/educationvideo', 'WebController@educationvideo');
Route::get('/educationvideo/{type}', 'WebController@educationvideoType');
Route::get('/health', 'WebController@health');
Route::get('/health/{type}', 'WebController@healthType');
Route::get('/faq', 'WebController@faq');
Route::get('/storyforkid', 'WebController@storyforkid');
Route::get('/storyforkid/{type}', 'WebController@storyforkidType');
Route::get('/songforkid', 'WebController@songforkid');

