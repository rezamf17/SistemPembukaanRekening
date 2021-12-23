<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DataNasabahController;
use App\Http\Controllers\WadiahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/mudharabah', function () {
    return view('mudharabah');
});
Route::resource('/', FormulirController::class);
Route::resource('/nasabah', DataNasabahController::class);
Route::resource('/wadiah', WadiahController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
