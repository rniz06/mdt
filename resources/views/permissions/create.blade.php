@extends('adminlte::page')

@section('title', 'Crear Permiso')

@section('content_header')

@stop

@section('content')

    <form action="{{ Route('permissions.store') }}" method="POST" class="card card-success mt-2">

        @csrf

        <div class="card-header">
            <h3 class="card-title">Agregar Permiso.</h3>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <label>Nombre del permiso:</label>
                    <x-input type="text" name="name" class="form-control" placeholder="Ej: folders.index"
                        value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Agregar</button>
            </div>
        </div>

    </form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
