@extends('adminlte::page')

@section('title', 'Editar Permiso')

@section('content_header')

@stop

@section('content')

    <form action="{{ Route('permissions.update', $permission->id) }}" method="POST" class="card card-warning mt-2">

        @csrf
        @method('put')

        <div class="card-header">
            <h3 class="card-title">Editar permiso.</h3>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <label>Nombre:</label>
                    <x-input type="text" name="name" class="form-control" value="{{ old('name', $permission->name) }}" />
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-warning">Actualizar</button>
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
