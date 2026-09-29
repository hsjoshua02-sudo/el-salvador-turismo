<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugarController;

Route::get('/', [LugarController::class, 'index'])->name('lugares.index');
Route::get('/lugar/{id}', [LugarController::class, 'show'])->name('lugares.show');
Route::post('/contacto', [LugarController::class, 'contacto'])->name('contacto.enviar');