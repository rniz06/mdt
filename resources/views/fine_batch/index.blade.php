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
            <h3 class="card-title">Tabla de Boletas Generadas
                {{-- @can('expedientes-archivos-crear') --}}
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#fineBatchCreate">
                    <i class="fas fa-plus"></i> Generar Boletas
                </button>
                {{-- @endcan --}}
            </h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Desde:</th>
                        <th>Hasta:</th>
                        <th>Asignado a:</th>
                        <th style="width: 40px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fines_batch as $fine_batch)
                        <tr>
                            <td>#</td>
                            <td>Nº {{ $fine_batch->boleta_inicial }}</td>
                            <td>Nº {{ $fine_batch->boleta_final }}</td>
                            <td> {{ $fine_batch->user->name }} </td>
                            <td><span class="badge bg-danger">Acciones:</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                {{ $fines_batch->links('pagination::bootstrap-4') }}
            </ul>
        </div>
    </div>

    @include('fine_batch.create')
@stop

@section('css')

@stop

@section('js')

@stop
