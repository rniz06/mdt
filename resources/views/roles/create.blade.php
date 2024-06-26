@extends('adminlte::page')

@section('title', 'Crear Rol')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Vaya!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Crear nuevo Rol</h3>
            </div>


            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Rol:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ej: Juan Pérez...">
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br />
                            @foreach ($permission as $value)
                                <label>
                                    <input type="checkbox" name="permission[]" value="{{ $value->name }}" class="name">
                                    {{ $value->name }}</label>
                                <br />
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Agregar</button>
                </div>
            </form>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
