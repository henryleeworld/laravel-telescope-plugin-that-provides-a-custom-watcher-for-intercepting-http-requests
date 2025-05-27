<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/cat/fact', function (Request $request) {
    return Http::get('https://catfact.ninja/fact');
});
