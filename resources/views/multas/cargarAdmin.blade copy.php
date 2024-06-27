@extends('adminlte::page')

@section('title', 'Generar Boletas')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Seleccionar Boleta:</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>N° Boleta:</th>
                        <th>Asignado a:</th>
                        <th style="width: 40px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($multas as $multa)
                        <tr>
                            <td>#</td>
                            <td>{{ $multa->n_boleta }}</td>
                            <td>{{ $multa->user->name }}</td>
                            <td><a href="{{ Route('multas.cargar', $multa) }}" class="badge bg-success">Cargar</a></td>
                        </tr>
                    @empty
                    <tr><div class="callout callout-danger">
                        <h5>No hay multas disponibles...</h5>
                    </div></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
