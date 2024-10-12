<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
Route::get('/formulario',[controladorVistas::class,'insert' ])->name('rutaformulario');
Route::get('/clientes',[controladorVistas::class,'select' ])->name('consultaclientes');

/*Route::get('/', function () {
    return view('clientes');
});
*/

/*Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('consultaclientes');*/

Route::view('/component', 'componentes')->name('rutacomponent');
