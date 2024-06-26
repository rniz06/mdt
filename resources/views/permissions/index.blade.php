@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Tabla de permisos
                        @can('permisos-crear')
                            <a href="{{ Route('permissions.create') }}" class=" ml-2 btn btn-success"><i
                                    class="fas fa-user-plus"></i>
                                Agregar</a>
                        @endcan

                    </h3>
                </div>

                <div class="card-body table-responsive p-4">
                    <x-adminlte-datatable id="table5" :heads="$heads" theme="light" striped hoverable compressed bordered with-footer>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td style="width: 5%">#</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <x-dropdown>

                                        @if (auth()->user()->can('permisos-editar'))
                                            <x-slot
                                                name="edit">{{ Route('permissions.edit', $permission->id) }}</x-slot>
                                        @endif

                                        @if (auth()->user()->can('permisos-eliminar'))
                                            <x-slot
                                                name="action">{{ Route('permissions.destroy', $permission->id) }}</x-slot>
                                        @endif

                                    </x-dropdown>
                                </td>
                            </tr>
                        @endforeach
                    </x-adminlte-datatable>
                </div>

            </div>

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
