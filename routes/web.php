<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeudaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\TipoMovimientoController;
use App\Http\Controllers\FuturoController;
use App\Http\Controllers\AbonoController;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('deuda')->group(function () {
    Route::get('/agregar', [DeudaController::class, 'create'])->name('deuda-agregar');
    Route::get('/visualizar', [DeudaController::class, 'index'])->name('deuda-visualizar');
    Route::post('/crear', [DeudaController::class, 'store'])->name('deuda-crear');
    Route::delete('/eliminar/{id}', [DeudaController::class, 'delete'])->name('deuda-eliminar');
    Route::get('/editar/{id}', [DeudaController::class, 'edit'])->name('deuda-editar');
    Route::PUT('/actualizar/{id}', [DeudaController::class, 'update'])->name('deuda-actualizar');
});

Route::prefix('Cuenta')->group(function () {
    Route::get('/agregar', [CuentaController::class, 'create'])->name('cuenta-agregar');
    Route::get('/visualizar', [CuentaController::class, 'index'])->name('cuenta-visualizar');
    Route::post('/crear', [CuentaController::class, 'store'])->name('cuenta-crear');
    Route::delete('/eliminar/{id}', [CuentaController::class, 'delete'])->name('cuenta-eliminar');
    Route::get('/editar/{id}', [CuentaController::class, 'edit'])->name('cuenta-editar');
    Route::PUT('/actualizar/{id}', [CuentaController::class, 'update'])->name('cuenta-actualizar');
});

Route::prefix('movimiento')->group(function () {
    Route::get('/agregar', [MovimientoController::class, 'create'])->name('movimiento-agregar');
    Route::get('/visualizar', [MovimientoController::class, 'index'])->name('movimiento-visualizar');
    Route::post('/crear', [MovimientoController::class, 'store'])->name('movimiento-crear');
    Route::delete('/eliminar/{id}', [MovimientoController::class, 'delete'])->name('movimiento-eliminar');
    Route::get('/editar/{id}', [MovimientoController::class, 'edit'])->name('movimiento-editar');
    Route::PUT('/actualizar/{id}', [MovimientoController::class, 'update'])->name('movimiento-actualizar');
});

Route::prefix('tipo')->group(function () {
    Route::get('/agregar', [TipoMovimientoController::class, 'create'])->name('tipo-agregar');
    Route::get('/visualizar', [TipoMovimientoController::class, 'index'])->name('tipo-visualizar');
    Route::post('/crear', [TipoMovimientoController::class, 'store'])->name('tipo-crear');
    Route::delete('/eliminar/{id}', [TipoMovimientoController::class, 'delete'])->name('tipo-eliminar');
    Route::get('/editar/{id}', [TipoMovimientoController::class, 'edit'])->name('tipo-editar');
    Route::PUT('/actualizar/{id}', [TipoMovimientoController::class, 'update'])->name('tipo-actualizar');
});

Route::prefix('abono')->group(function () {
    Route::get('/agregar', [AbonoController::class, 'create'])->name('abono-agregar');
    Route::get('/visualizar', [AbonoController::class, 'index'])->name('abono-visualizar');
    Route::post('/crear', [AbonoController::class, 'store'])->name('abono-crear');
 //   Route::delete('/eliminar/{id}', [AbonoController::class, 'delete'])->name('Abono-eliminar');
  //  Route::get('/editar/{id}', [AbonoController::class, 'edit'])->name('Abono-editar');
 //   Route::PUT('/actualizar/{id}', [AbonoController::class, 'update'])->name('Abonoactualizar');
//Hola Rustrian ILY
});

Route::prefix('futuro')->group(function () {
  //  Route::get('/agregar', [TipoMovimientoController::class, 'create'])->name('tipo-agregar');
    Route::get('/visualizar', [FuturoController::class, 'index'])->name('futuro-visualizar');
   // Route::post('/crear', [TipoMovimientoController::class, 'store'])->name('tipo-crear');
    Route::delete('/eliminar/{id}', [FuturoController::class, 'delete'])->name('futuro-eliminar');
    Route::get('/editar/{id}', [FuturoController::class, 'edit'])->name('futuro-editar');
    Route::PUT('/actualizar/{id}', [FuturoController::class, 'update'])->name('futuro-actualizar');
    //Hola Rustrian
});
