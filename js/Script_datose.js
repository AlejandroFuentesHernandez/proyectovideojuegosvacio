$(document).ready(function()
  {
    llenarTienda();
  });

function llenarTienda()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Datos_empleado/cargaridtienda',
    success: function(data)
    {
      $('#id_tienda').html('');
      $('#id_tienda').html(data);
    }

  });
}
$('#exampleModalLong').on('shown.bs.modal',function(){
  $('#myInput').trigger('focus');
});





