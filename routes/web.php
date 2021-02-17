<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::get('altaclientes', [ClientesController::class,'AltaClientes'])->name('altaclientes');
Route::post('guardarclientes', [ClientesController::class,'Guardado'])->name('guardarclientes');
