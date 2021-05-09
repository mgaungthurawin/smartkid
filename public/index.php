<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));
define('MENU', json_encode(
	[
		1 => "ေဗဒင်",
		2 => 'ပညာေပး*ုပ်သံ',
		3 => 'ကေလးသီချင်းများ',
		4 => 'ကစား7ကမယ်',
		5 => 'ကျန ်းမာေရး',
		6 => 'ကေလးပံုြပင်များ'
	]
));

define('PAGE', json_encode([
	1 => [
			[
				'title' => 'မိဿရာသီဖွား',
				'image' => 'google.com',
				'param' => 11
			],
			[
				'title' => '+ပိဿရာသီဖွား',
				'image' => 'google.com',
				'param' => 22
			],
			[
				'title' => 'ေမထုန်ရာသီဖွား',
				'image' => 'google.com',
				'param' => 33
			],
			[
				'title' => 'ကရကဋ်ရာသီဖွား',
				'image' => 'google.com',
				'param' => 44
			],
			[
				'title' => 'သိဟ်ရာသီဖွား',
				'image' => 'google.com',
				'param' => 55
			],
			[
				'title' => 'ကန်ရာသီဖွား',
				'image' => 'google.com',
				'param' => 66
			],
			[
				'title' => '၇။တူရာသီဖွား',
				'image' => 'google.com',
				'param' => 77
			],
			[
				'title' => '+ဗိစ;ာရာသီဖွား',
				'image' => 'google.com',
				'param' => 88
			],
			[
				'title' => 'ဓ=ုရာသီဖွား',
				'image' => 'google.com',
				'param' => 99
			],
			[
				'title' => 'မကာရရာသီဖွား',
				'image' => 'google.com',
				'param' => 10
			],
			[
				'title' => 'ကံုရာသီဖွား',
				'image' => 'google.com',
				'param' => 11
			],
			[
				'title' => 'မိန်ရာသီဖွား',
				'image' => 'google.com',
				'param' => 12
			],
		]
]));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
