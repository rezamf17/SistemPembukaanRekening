<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DataNasabahController;
use App\Http\Controllers\WadiahController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\DepositoNasabahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NasabahCabangController;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DepositoCabangController;

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
Route::get('/done', function () {
    return view('done');
});
Route::get('/form', function () {
    return view('form');
});
Route::group(['middleware' => ['auth', 'role:super_admin']], function() {
    Route::get('/nasabahHapus/{id}', [DataNasabahController::class, 'hapus']);
    Route::resource('/KelolaAkun', KelolaAkunController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/KelolaAkunHapus/{id}', [KelolaAkunController::class, 'delete'])->name('delete');
    
});
Route::group(['middleware' => ['auth', 'role:admin, super_admin']], function() {
    Route::resource('/nasabahCabang', NasabahCabangController::class);
    Route::resource('/nasabah', DataNasabahController::class);
    Route::get('/depositoCabang/{id}', [DepositoCabangController::class, 'view']);
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/laporanTabungan/{id}', [ReportController::class, 'tabunganNasabahReport']);
    Route::get('/laporanDeposito/{id}', [ReportController::class, 'depositoNasabahReport']);
    Route::get('/laporanWadiah/{id}', [ReportController::class, 'wadiahNasabahReport']);
    Route::get('/laporanMudharabah/{id}', [ReportController::class, 'mudharabahNasabahReport']);
    Route::resource('/rekeningDeposito', DepositoController::class);
});
Route::resource('/', FormulirController::class);
Route::resource('/wadiah', WadiahController::class);
// Route::resource('/deposito', DepositoController::class);
Route::get('/deposito', [DepositoNasabahController::class, 'index']);
Route::post('/deposito', [DepositoNasabahController::class, 'store']);
Auth::routes();

