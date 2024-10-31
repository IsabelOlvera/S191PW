<?php

use App\Http\Controllers\registroController;
use Illuminate\Support\Facades\Route;


Route::view('/','principal')->name('rutaprincipal');
//Route::view('/registro','registro')->name('rutaregistro');

Route::get('/registro', [registroController::class, 'registro'])->name('rutaregistro');
Route::post('/registro', [registroController::class, 'new'])->name('registronew');

