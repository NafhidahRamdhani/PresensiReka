<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShiftController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function ()
{
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/department', DepartmentController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::resource('/lokasi', LokasiController::class);
    Route::resource('/presensi-masuk', PresensiController::class);
    Route::resource('/report', ReportController::class);
    Route::resource('/shift', ShiftController::class);
});


require __DIR__ . '/auth.php';
