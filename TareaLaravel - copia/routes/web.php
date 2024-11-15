<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//Rutas con las que trabajaba controladorVistas

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
//Route::get('/formulario',[controladorVistas::class,'insert' ])->name('rutaformulario');
Route::get('/clientes',[controladorVistas::class,'select' ])->name('consultaclientes');
Route::post('/enviarCliente',[controladorVistas::class,'procesaCliente' ])->name('rutaenvia');

//Rutas de cliente controller
Route::get('/cliente/create',[clienteController::class,'create' ])->name('rutaformulario');




/*Route::get('/', function () {
    return view('clientes');
});
*/

/*Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('consultaclientes');*/

Route::view('/component', 'componentes')->name('rutacomponent');

