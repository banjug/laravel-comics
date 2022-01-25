<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') ->name('comics-home');

Route::get('details', 'DetailsController@details') ->name('comics-details');

