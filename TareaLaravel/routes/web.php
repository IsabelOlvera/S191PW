<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

//Rutas con las que trabajaba controladorVistas

//Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
//Route::get('/formulario',[controladorVistas::class,'insert' ])->name('rutaformulario');
//Route::get('/clientes',[controladorVistas::class,'select' ])->name('consultaclientes');
//Route::post('/enviarCliente',[controladorVistas::class,'procesaCliente' ])->name('rutaenvia');

//Rutas de cliente controller
Route::get('/',[clienteController::class,'home'])->name('rutainicio');
Route::get('/cliente/create',[clienteController::class,'create' ])->name('rutaformulario');
Route::post('/cliente',[clienteController::class,'store' ])->name('rutaenvia');

Route::get('/cliente',[clienteController::class,'index' ])->name('consultaclientes');



/*Route::get('/', function () {
    return view('clientes');
});
*/

/*Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('consultaclientes');*/

Route::view('/component', 'componentes')->name('rutacomponent');

