<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeudaController;

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
