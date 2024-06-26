@extends('adminlte::page')

@section('title', 'Editar Rol')

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
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Rol</h3>
            </div>


            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('put')
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Rol:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $role->name }}">
                    </div>

                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Permisos:</strong>
                            <br />
                            <div class=" col-12">
                                @foreach ($permission as $value)                            
                                <div class="col-4">
                                    <label>
                                        <input type="checkbox" @if (in_array($value->id, $rolePermissions)) checked @endif name="permission[]"
                                            value="{{ $value->name }}" class="name">
                                        {{ $value->name }}</label>
                                    
                                </div>
                            @endforeach
                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
