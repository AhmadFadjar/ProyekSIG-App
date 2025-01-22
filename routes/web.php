<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;




Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/import', [PopulasiController::class, 'import'])->name('import.populasi');
Route::get('/landing', [PopulasiController::class, 'index']);
