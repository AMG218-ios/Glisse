<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/log-in', function () {
    return view('log-in');
});
