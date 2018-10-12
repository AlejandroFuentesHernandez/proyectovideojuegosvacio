<div class="modal" id="notificacion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $msg; ?></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url();?>Datos_usuario/mostrar" class="btn btn-success">close</a>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function()
  {
    $('#notificacion').modal("show");
    //llenarEstado();
    //llenarEmpleado();
    //validar();
  });
</script>