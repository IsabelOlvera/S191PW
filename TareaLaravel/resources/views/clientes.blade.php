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

    @if (session('eliminado'))
    <script>
        Swal.fire({
            title: '¡Eliminación Exitosa!',
            text: "{{ session('eliminado') }}",
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

    <script>
        document.querySelectorAll('.eliminar-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
    
                Swal.fire({
                    title: '¿Estás seguro de que deseas eliminar a este usuario?',
                    text: "Esta acción no se puede deshacer",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Enviar el formulario de eliminación
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = `/cliente/${id}`;
                        form.innerHTML = `
                            @csrf
                            @method('DELETE')
                        `;
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });
    </script>
    @endsection

