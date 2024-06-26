<!-- Modal -->
<div class="modal fade" id="fineBatchCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog card-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir comentario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ Route('fine_batch.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="form-group">
                        <label for="Boleta Inicial:">Boleta Inicial:</label>
                        <input type="text" name="boleta_inicial" class="form-control form-control-sm"
                            placeholder="Ej: 0027025">
                    </div>

                    <div class="form-group">
                        <label for="Boleta Final:">Boleta Final:</label>
                        <input type="text" name="boleta_final" class="form-control form-control-sm"
                            placeholder="Ej: 0027075">
                    </div>

                    <div class="form-group">
                        <label for="Boleta Final:">Asignar al Pmt:</label>
                        <select class="form-control form-control-sm" name="user_id">
                            <option>Seleccionar:</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fas fa-reply-all"></i> Salir</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Generar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
