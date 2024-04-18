<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [InputController::class, 'home'])->name('home');
Route::get('/kalkulator', [InputController::class, 'index'])->name('kalkulator');
Route::get('/kalkulatorjs', [InputController::class, 'javascript'])->name('kalkulatorjs');
Route::post('count', [InputController::class, 'input'])->name('hitung');
