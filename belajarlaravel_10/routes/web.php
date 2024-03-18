<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
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

Route::get('hello/{nama}/{nama2}', function () {
    return 'haloo';
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('admin', function () {
    return view('template');
});

Route::get('table', function () {
    return view('tabel');
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambah', [SiswaController::class, 'create']);
// Route::get('tambah', [SiswaController::class, 'create']);
// Route::get('tambah', [SiswaController::class, 'create']);


Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);
Route::resource('upload', UploadController::class);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 