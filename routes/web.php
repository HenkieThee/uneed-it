<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/overons', function () {
    return view('overons');
});

Route::get('/service', function () {
    return view('service');
});