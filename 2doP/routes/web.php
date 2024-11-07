<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formularioController;

/*Route::get('/', function () {
    return view('formUsuarios');
});*/


Route::get('/', [formularioController::class, 'create'])->name('inicio');
Route::post('/', [formularioController::class, 'store']);
