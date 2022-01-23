<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/comics-home');
});

Route::get('details', function () {
    return view('pages/comics-details');
});

