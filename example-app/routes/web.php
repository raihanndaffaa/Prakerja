<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    return view('tabel');
});

Route::put('users/{id}', function ($id) {
    
});

Route::post('users/{id}', function ($id) {
    
});

Route::delete('users/{id}', function ($id) {
    
});