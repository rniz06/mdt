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
            <h3 class="card-title">Seleccionar boleta:</h3>
        </div>

        <div class="card-body">
            <x-adminlte-datatable id="table5" :heads="$heads" theme="light" striped hoverable compressed with-buttons>
                    @foreach ($multas as $multa)
                    <tr>
                        <td style="width: 1%">#</td>
                        <td>{{ $multa->n_boleta }}</td>
                        <td>{{ $multa->user->name }}</td>
                        <td><a href="{{ Route('multas.cargar', $multa) }}" class="badge bg-success">Cargar</a></td>
                    </tr>
                    @endforeach
            </x-adminlte-datatable>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
