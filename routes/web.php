<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', function () {
    return response()->json([
        'app' => config('app.name'),
        'env' => config('app.env'),
        'debug' => config('app.debug'),
        'versions' => [
            'laravel' => app()->version(),
            'php' => PHP_VERSION,
        ],
        'db' => config('database.default'),
        'timezone' => config('app.timezone'),
        'now' => now()->toDateTimeString(),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/boom', function () {
    throw new \RuntimeException('Excepción de prueba');
});