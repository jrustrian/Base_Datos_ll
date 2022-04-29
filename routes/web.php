<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeudaController;
use App\Http\Controllers\CuentaController;

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
