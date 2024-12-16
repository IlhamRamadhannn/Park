<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ParkingController;

Route::get('/parking', function () {
    return view('parking'); // Form untuk input nomor kendaraan
});

Route::post('/parking/entered', [ParkingController::class, 'entered'])->name('parking.entered');
Route::post('/parking/exited', [ParkingController::class, 'exited'])->name('parking.exited');
Route::get('/parking/report', [ParkingController::class, 'report'])->name('parking.report');
Route::get('/parking/export', [ParkingController::class, 'export'])->name('parking.export');

