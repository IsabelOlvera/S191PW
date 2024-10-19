<?php

use App\Http\Controllers\convertirController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','inicio');

Route::view('/repaso1','repaso1');

Route::post('/convertir',[convertirController::class,'convertir' ])->name('result');