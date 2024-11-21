@extends('layouts.plantilla1')
    @section('titulo','Clientes')
    @section('contenido')
    {{-- Mostrar mensajes de éxito --}}
    @if (session('actualizacion'))
    <script>
        Swal.fire({
            title: '¡Actualización Exitosa!',
            text: "{{ session('actualizacion') }}",
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->email }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('rutaedit', $cliente->id) }}" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</a>
                <button type="button" class="btn btn-danger btn-sm eliminar-btn" data-id="{{ $cliente->id }}">
                    {{ __('Eliminar') }}
                </button>
            </div>
        </div>
        @endforeach
    </div> {{-- divcontainer --}}
    {{-- Finaliza tarjetaCliente --}}
    @endsection

