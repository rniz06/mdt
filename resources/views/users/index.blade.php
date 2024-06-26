@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title ">
                    <strong>Listado de Usuarios</strong>
                    @can('usuarios-crear')
                        <a href="{{ Route('users.create') }}" class="btn btn-success"><i class="fas fa-user-plus"></i> Usuario</a>
                    @endcan
                </h3>                
            </div>

            <div class="col-12 p-4">
                <x-adminlte-datatable id="table5" :heads="$heads" theme="light" striped hoverable compressed with-footer>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address->address ?? 'N/A' }}</td>
                            <td>
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $v)
                                        <label class="badge badge-secondary text-light">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <x-dropdown>
    
                                    @if (auth()->user()->can('usuarios-editar'))
                                        <x-slot name="edit">{{ Route('users.edit', $user->id) }}</x-slot>
                                    @endif
    
                                    @if (auth()->user()->can('usuarios-eliminar'))
                                        <x-slot name="action">{{ Route('users.destroy', $user->id) }}</x-slot>
                                    @endif
                                </x-dropdown>
                            </td>
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>

        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
