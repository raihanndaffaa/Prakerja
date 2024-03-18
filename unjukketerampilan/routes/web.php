<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('tampildata', function () {
    $data = ['php','java','c','javascript','dart'];

    foreach ($data as $item) {
        echo $item . '<br>';
    }
});

route::get('template', function () {
    return view('template');
});
