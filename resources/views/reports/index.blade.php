@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Reportes por dirección</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($folders_by_address as $folder)
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $folder->folders_count }}</h3>
                        <p>{{ $folder->address }}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map"></i>
                    </div>
                    @if (auth()->user()->can('expedientes-listar'))
                        <a href="{{ Route('reports.show', $folder->id) }}" class="small-box-footer">Ver... <i
                                class="fas fa-arrow-circle-right"></i></a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
