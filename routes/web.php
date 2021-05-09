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

Route::get('/', function () {
	$array = json_decode(MENU, TRUE);
	$page = json_decode(PAGE, TRUE);
	$array = $page[14];
	foreach ($array as $key => $a) {
		echo $a['param'];
		echo '<br/>';
	}

    // return view('welcome');
});
