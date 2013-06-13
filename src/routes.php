<?php

use SensioLabs\AnsiConverter\AnsiToHtmlConverter;

Route::get('/artisan', function()
{
	return View::make('artisan-web::artisan');
});

Route::get('/artisan/execute', function() {
	$env = Input::get('env');
	$cmd = Input::get('cmd');

	$cmd = base_path().'/artisan --ansi -n '.escapeshellcmd($cmd).' 2>&1';
	exec($cmd, $lines);

	$output = implode(PHP_EOL, $lines);
	$converter = new AnsiToHtmlConverter();

	return $converter->convert($output);
});
