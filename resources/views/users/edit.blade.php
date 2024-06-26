@extends('adminlte::page')

@section('title', 'Editar Usuario')

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
                <h3 class="card-title">Editar Usuario</h3>
            </div>


            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('put')
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Usuario:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username:</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="{{ $user->username }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo del Usuario:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">
                    </div>

                    <div class="col-4 form-group">
                        <label>Dirección:</label>
                        <select name="address_id" class="form-control">
                            <option value="">Seleccionar...</option>
                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}"
                                    {{ $address->id == $user->address_id ? 'selected' : '' }}>
                                    {{ $address->address }}
                                </option>
                            @endforeach
                        </select>
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
                            <select name="roles[]" class="form-control multiple">
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}"
                                        {{ $role == $role ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
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
