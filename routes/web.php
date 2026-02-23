<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KategorijasController;
use App\Http\Controllers\NodarbibasController;
use App\Http\Controllers\VaditajiController;
use App\Http\Controllers\PieteikumiController;
use App\Http\Controllers\DalibniekiController;

Route::get('/', function () {
    return view('home');
});

Route::get('/aktivitates', [DataController::class, 'showAllData'])->name('data.index');
Route::get('/aktivitates/create', [DataController::class, 'create'])->name('data.create');
Route::post('/aktivitates', [DataController::class, 'submit'])->name('data.submit');
Route::get('/aktivitates/{id}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::post('/aktivitates/{id}/update', [DataController::class, 'update'])->name('data.update');
Route::get('/aktivitates/{id}/delete', [DataController::class, 'delete'])->name('data.delete');

Route::get('/kategorijas', [KategorijasController::class, 'showAllKategorijas'])->name('kategorijas.index');
Route::get('/kategorijas/create', [KategorijasController::class, 'create'])->name('kategorijas.create');
Route::post('/kategorijas', [KategorijasController::class, 'submit'])->name('kategorijas.submit');
Route::get('/kategorijas/{id}/edit', [KategorijasController::class, 'edit'])->name('kategorijas.edit');
Route::post('/kategorijas/{id}/update', [KategorijasController::class, 'update'])->name('kategorijas.update');
Route::get('/kategorijas/{id}/delete', [KategorijasController::class, 'delete'])->name('kategorijas.delete');

Route::get('/nodarbibas', [NodarbibasController::class, 'showAllNodarbibas'])->name('nodarbibas.index');
Route::get('/nodarbibas/create', [NodarbibasController::class, 'create'])->name('nodarbibas.create');
Route::post('/nodarbibas', [NodarbibasController::class, 'submit'])->name('nodarbibas.submit');
Route::get('/nodarbibas/{id}/edit', [NodarbibasController::class, 'edit'])->name('nodarbibas.edit');
Route::post('/nodarbibas/{id}/update', [NodarbibasController::class, 'update'])->name('nodarbibas.update');
Route::get('/nodarbibas/{id}/delete', [NodarbibasController::class, 'delete'])->name('nodarbibas.delete');

Route::get('/vaditaji', [VaditajiController::class, 'showAllVaditaji'])->name('vaditaji.index');
Route::get('/vaditaji/create', [VaditajiController::class, 'create'])->name('vaditaji.create');
Route::post('/vaditaji', [VaditajiController::class, 'submit'])->name('vaditaji.submit');
Route::get('/vaditaji/{id}/edit', [VaditajiController::class, 'edit'])->name('vaditaji.edit');
Route::post('/vaditaji/{id}/update', [VaditajiController::class, 'update'])->name('vaditaji.update');
Route::get('/vaditaji/{id}/delete', [VaditajiController::class, 'delete'])->name('vaditaji.delete');

Route::get('/pieteikumi', [PieteikumiController::class, 'showAllPieteikumi'])->name('pieteikumi.index');
Route::get('/pieteikumi/create', [PieteikumiController::class, 'create'])->name('pieteikumi.create');
Route::post('/pieteikumi', [PieteikumiController::class, 'submit'])->name('pieteikumi.submit');
Route::get('/pieteikumi/{id}/edit', [PieteikumiController::class, 'edit'])->name('pieteikumi.edit');
Route::post('/pieteikumi/{id}/update', [PieteikumiController::class, 'update'])->name('pieteikumi.update');
Route::get('/pieteikumi/{id}/delete', [PieteikumiController::class, 'delete'])->name('pieteikumi.delete');

Route::get('/dalibnieki', [DalibniekiController::class, 'showAllDalibnieki'])->name('dalibnieki.index');
Route::get('/dalibnieki/create', [DalibniekiController::class, 'create'])->name('dalibnieki.create');
Route::post('/dalibnieki', [DalibniekiController::class, 'submit'])->name('dalibnieki.submit');
Route::get('/dalibnieki/{id}/edit', [DalibniekiController::class, 'edit'])->name('dalibnieki.edit');
Route::post('/dalibnieki/{id}/update', [DalibniekiController::class, 'update'])->name('dalibnieki.update');
Route::get('/dalibnieki/{id}/delete', [DalibniekiController::class, 'delete'])->name('dalibnieki.delete');



