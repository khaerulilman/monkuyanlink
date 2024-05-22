<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/surveiPage', function () {
    return view('surveiPage');
});




