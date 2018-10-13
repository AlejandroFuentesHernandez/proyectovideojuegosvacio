<div class="modal" id="notificacion_empleado" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Datos procesados</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button><!--button-->
			</div><!--modal-header-->
			<div class="modal-body">
				<p><?php echo $msg; ?></p>
			</div><!--modal-body-->
			<div class="modal-footer">
				<a href="<?php echo base_url();?>Datos_empleado/mostrar" class="btn btn-success">Close</a>
			</div><!--modal-footer-->
		</div><!--modal-content-->
	</div><!-- modal-dialog-->
</div><!--modal-->


<script>
	$(document).ready(function()
		{
			$('#notificacion_empleado').modal("show");
		});
</script>