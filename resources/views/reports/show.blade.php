@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Reportes de {{ $address->address }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Expedientes del ciudadano</h3>
        </div>
        <div class="card-body p-0">
            @if ($folders->isEmpty())
                <div class="callout callout-danger">
                    <p class="font-weight-bold"> * La dirección de {{ $address->address }} no cuenta con
                        Expedientes registrados
                    </p>
                </div>
            @else
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Asunto:</th>
                            <th>N° Mesa entrada</th>
                            <th>Responsable:</th>
                            <th>Estado:</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($folders as $folder)
                            <tr>
                                <td>#</td>
                                <td>{{ $folder->title }}</td>
                                <td>{{ $folder->entry_table_code }}</td>
                                <td>{{ $folder->citizen->name }}</td>
                                <td><span class="badge bg-danger">{{ $folder->state->state }}</span>
                                </td>
                                <td>                                
                                    @if (auth()->user()->can('expedientes-ver'))
                                    <a href="{{ Route('folders.show', $folder->id) }}" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    @else
                                        <h6 class="font-italic">No permisos...</h6>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <div class="card-footer pagination-sm">
                {{ $folders->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
