@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Listado de Roles</h1>
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
                @can('roles-crear')
                    <h3 class="card-title"><a href="{{ Route('roles.create') }}" class="btn btn-success"><i
                                class="fas fa-plus-square"></i> Crear Rol</a>
                    </h3>
                @endcan
            </div>

            <div class="card-body table-responsive p-4">
                <x-adminlte-datatable id="table5" :heads="$heads" theme="light" striped hoverable compressed bordered with-footer>
                    @foreach ($roles as $role)
                        <tr>
                            <td style="width: 5%">#</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <x-dropdown>

                                    @if (auth()->user()->can('roles-editar'))
                                        <x-slot name="edit">{{ Route('roles.edit', $role->id) }}</x-slot>
                                    @endif

                                    @if (auth()->user()->can('roles-eliminar'))
                                        <x-slot name="action">{{ Route('roles.destroy', $role->id) }}</x-slot>
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
