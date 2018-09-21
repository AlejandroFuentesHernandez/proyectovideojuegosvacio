$(document).ready(function()
{
	llenaridempleado();
});

function llenaridempleado()
{
	$.ajax({
			type:"POST",
			url:'<?php echo site_url();?>Datos_usuario_model/cargaridempleado',
			success:function(data)
			{
				$('#id_empleados').html('');
				$('#id_empleados').html(data);
			}
	});
}

$('exampleModalLong').on('shown.bs.modal',function(){
	$('#myInput').trigger('focus');
});

