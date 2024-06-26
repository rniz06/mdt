@extends('adminlte::page')

@section('title', 'Boletas')

@section('content_header')
    <h1>
    </h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="callout callout-danger">
            <h5><i class="fas fa-times" style="color: #bd2130; margin-top:2px"></i> {{ $message }}</h5>
        </div>
    @endif

    <div class="container-fluid">
        @if ($role == 'Admin')
            <h2>Usuarios con boletas Disponibles</h2>
            <div class="row col-12">
            @foreach ($data as $usuario)                
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $usuario->multas_count }}<sup style="font-size: 20px"> Boletas Disponibles</sup>
                                </h3>
                                <p>{{ $usuario->name }}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <a href="#" class="small-box-footer">Ver... <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>            
            @endforeach
        </div>
        @elseif($role == 'TRANSITO-PMT')
            <h2>Multas en estado Cargado</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nº Boleta</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($data as $multa)
                        <tr>
                            <td>{{ $multa->n_boleta }}</td>
                            <td>{{ $multa->descripcion }}</td>
                            <td>{{ $multa->state }}</td>
                        </tr>
                    @empty
                        <div class="callout callout-danger">
                            <h5>No tienes multas cargadas...</h5>
                        </div>
                    @endforelse
                </tbody>
            </table>
        @else
            <p>No tiene permisos para ver esta página.</p>
        @endif

    @stop

    @section('css')

    @stop

    @section('js')

    @stop
