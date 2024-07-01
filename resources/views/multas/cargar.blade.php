@extends('adminlte::page')

@section('title', 'Generar Boletas')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Cargar Multa</h3>
        </div>


        <form method="POST" action="{{ route('multas.storeMulta', ['multa' => $multa->id]) }}">
            @csrf
            @method('POST')
            <input type="hidden" name="state" value="Cargado">

            <div class="col-12">

                <div class="form-group col-12">
                    <label for="inputSpentBudget">N° de Boleta:</label>
                    <div class="form-control form-control-sm" readonly>{{ $multa->n_boleta }}</div>
                </div>

            </div>

            <div class="col-12">
                <div class="card card-secondary collapsed-card mt-2">
                    <div class="card-header">
                        <h3 class="card-title">Datos del vehiculo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Vehiculo:</label>
                            <input type="text" id="inputEstimatedBudget" name="vehiculo"
                                class="form-control form-control-sm" placeholder="Descripción..."
                                value="{{ old('vehiculo') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Chapa del Vehiculo:</label>
                            <input type="text" id="inputEstimatedBudget" name="chapa_vehiculo"
                                class="form-control form-control-sm" placeholder="Ej:ABCD123"
                                value="{{ old('chapa_vehiculo') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Lugar de la infracción:</label>
                            <input type="text" id="inputEstimatedBudget" name="lugar"
                                class="form-control form-control-sm" placeholder="Ej: Avd. Santa Rosa"
                                value="{{ old('lugar') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Articulos:</label>
                            {{-- With multiple slots, and plugin config parameters --}}
                            @php
                                $config = [
                                    'placeholder' => 'Select multiple options...',
                                    'allowClear' => true,
                                ];
                            @endphp
                            <x-adminlte-select2 id="sel2Category" name="sel2Category[]" igroup-size="sm" :config="$config"
                                multiple>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-gradient-red">
                                        <i class="fas fa-tags"></i>
                                    </div>
                                </x-slot>
                                <x-slot name="appendSlot">
                                </x-slot>
                                <option>Sports</option>
                                <option>News</option>
                                <option>Games</option>
                                <option>Science</option>
                                <option>Maths</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Fecha de la infracción:</label>
                            {{-- Minimal --}}
                            <x-adminlte-input-date name="fecha_infraccion" />
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-secondary collapsed-card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Datos del Infractor</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Conductor:</label>
                                <input type="text" id="inputEstimatedBudget" name="conductor"
                                    class="form-control form-control-sm" placeholder="Ej: Juan Perez"
                                    value="{{ old('conductor') }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">CI del Conductor:</label>
                                <input type="text" id="inputEstimatedBudget" name="conductor_ci"
                                    class="form-control form-control-sm" placeholder="Ej: 4234845"
                                    value="{{ old('conductor_ci') }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Municipio del Conductor:</label>
                                <input type="text" id="inputEstimatedBudget" name="conductor_municipio"
                                    class="form-control form-control-sm" placeholder="Ej: Ñemby"
                                    value="{{ old('conductor_municipio') }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Propietario:</label>
                                <input type="text" id="inputEstimatedBudget" name="propietario"
                                    class="form-control form-control-sm"
                                    placeholder="Opcional en caso de no estar presente" value="{{ old('propietario') }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">CI del Propietario:</label>
                                <input type="text" id="inputEstimatedBudget" name="propietario_ci"
                                    class="form-control form-control-sm"
                                    placeholder="Opcional en caso de no estar presente"
                                    value="{{ old('propietario_ci') }}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#multasAnulacion">
                        <i class="fas fa-window-close"></i> Anular
                    </button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Cargar</button>
                </div>
        </form>
    </div>
    @include('multas.anulacion')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}"> --}}
@stop

@section('js')
    {{-- <script src="{{asset('vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<script>
    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
</script> --}}
@stop
