<div class="modal fade" id="formOrden" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear orden</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../../src/functions/controlOrden.php" method="post">
                  Fecha creacion
                <input class="form-control" type="date" name="fechaCreacion" aria-label="default input example"> 
                  Fecha entrega
                <input class="form-control" type="date" name="fechaEntrega" aria-label="default input example"> 
                Fecha pago
                <input class="form-control" type="date" name="fechaPago" aria-label="default input example"> 
                 Numero orden
                <input class="form-control" type="text" placeholder="ingrese su documento sin puntos ni comas, por favor" name="numeroOrden" aria-label="default input example"> 
                  Creado por
                <input class="form-control" type="number" name="CreadoPor"  value="1" aria-label="default input example"> 
                <input type="hidden" name="creadoPor" value="1">
                <button type="button" class="btn btn-secondary ms-0 m-2" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info m-2">Confirmar</button>
            </form>
      </div>
      <div class="modal-footer">
         </div>
    </div>
  </div>
</div>