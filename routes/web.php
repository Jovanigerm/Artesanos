<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DireccionesController;

//clientes
Route::get('altaclientes', [ClientesController::class,'AltaClientes'])->name('altaclientes');
Route::post('guardarclientes', [ClientesController::class,'Guardado'])->name('guardarclientes');
Route::get('reporteclientes', [ClientesController::class,'reporteclientes'])->name('reporteclientes');
Route::get('desactivaclientes/{idclis}', [ClientesController::class,'desactivaclientes'])->name('desactivaclientes');
Route::get('activaclientes/{idclis}', [ClientesController::class,'activaclientes'])->name('activaclientes');
Route::get('eliminarclientes/{idclis}', [ClientesController::class,'eliminarclientes'])->name('eliminarclientes');
Route::get('editarclientes/{idclis}', [ClientesController::class,'editarclientes'])->name('editarclientes');
Route::post('guardarcambiosclientes', [ClientesController::class,'guardadocambios'])->name('guardarcambiosclientes');
//Direcciones
Route::get('altadirecciones',[DireccionesController::class,'altadirecciones'])->name('altadirecciones');
Route::post('guardardirecciones', [DireccionesController::class,'Guardado'])->name('guardardirecciones');
Route::get('reportedirecciones', [DireccionesController::class,'reportedirecciones'])->name('reportedirecciones');
Route::get('desactivadirecciones/{idDireccion_c}', [DireccionesController::class,'desactivadirecciones'])->name('desactivadirecciones');
Route::get('activadirecciones/{idDireccion_c}', [DireccionesController::class,'activadirecciones'])->name('activadirecciones');
Route::get('eliminardirecciones/{idDireccion_c}', [DireccionesController::class,'eliminardirecciones'])->name('eliminardirecciones');
Route::get('editardirecciones/{idDireccion_c}', [DireccionesController::class,'editardirecciones'])->name('editardirecciones');
Route::post('guardarcambiosdirecciones', [DireccionesController::class,'guardadocambiosdirecc'])->name('guardarcambiosdirecciones');
