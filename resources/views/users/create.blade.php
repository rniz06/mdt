@extends('adminlte::page')

@section('title', 'Dashboard')

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
                <h3 class="card-title">Crear nuevo Usuario</h3>
            </div>


            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Usuario:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ej: Juan Pérez...">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username:</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Ej: nombre.apellido">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo del Usuario:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="micorreo@nemby.gov.py">
                    </div>

                    <div class="col-4 form-group">
                        <label>Seleccinar dirección:</label>
                        <select name="address_id" class="form-control">
                            <option value="">Seleccionar</option>
                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}">{{ $address->address }}</option>
                            @endforeach
                        </select>
                        @error('address_id')
                            <p class="text-danger">*{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password del Usuario:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password...">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirmar contraseña:</label>
                        <input type="password" name="confirm-password" class="form-control" id="exampleInputEmail1" placeholder="Password...">
                    </div>

                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong>Role:</strong>
                            <select class="form-control multiple" multiple name="roles[]">
                                <option value="">Seleccionar...</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
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
