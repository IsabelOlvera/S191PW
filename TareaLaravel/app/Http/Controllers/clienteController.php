<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    public function home(){
        return view('inicio');
    }
    /**
     * Funciona para mostrar la vista de consulta.
     */
    public function index()
    {
        $consultaClientes=DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aquí preparo el insert.
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'email' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        $usuario=$request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();

        if (!$cliente) {
            return redirect()->route('consultaclientes')->withErrors(['Cliente no encontrado.']);
        }

        return view('formulario', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('cliente')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'email' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => now(),
        ]);

        session()->flash('actualizacion', 'El cliente fue actualizado correctamente.');
        return redirect()->route('consultaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cliente')->where('id', $id)->delete();
        
        session()->flash('eliminado', 'El cliente fue eliminado correctamente.');
        return redirect()->route('consultaclientes');
    }
}
