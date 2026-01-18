<?php

use App\Http\Controllers\SolarSystemController;
use App\Http\Controllers\PlanetController;

Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');
Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show'])->name('solarsystems.show');

Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('planets.show');


