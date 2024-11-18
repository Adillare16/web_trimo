<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tampilan.index');
});

Route::get('/login', function () {
    return view('login');
});