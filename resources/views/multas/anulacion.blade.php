<!-- Modal -->
<div class="modal fade" id="multasAnulacion" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="callout callout-danger">
                    <h5>¡Recuerde presentar su boleta anulada!</h5>
                </div>
                <form action="{{ Route('multas.anulacion', $multa->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="state" value="Anulado">

                    <div class="col-12 form-group">
                        <label>Motivo de la anulación</label>
                        <input class="form-control form-control-sm" type="text" name="mot_anulacion"
                            placeholder="Motivo...">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                                class="fas fa-angle-double-left"></i> Salir</button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-window-close"></i>
                            Anular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
