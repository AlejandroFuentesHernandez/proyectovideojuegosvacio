<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Clientes</title>
</head>
<body>
  

<!-- INICIO MODAL EN EL SE PODRA EDITAR CLIENTES-->
<div class="modal fade" data-backdrop="static"  id="editar_cliente"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
            <div class="modal-content">
                <div class="modal-body">
                        <div class="row"> 
                          <div class="col-md-12">
                            <div class="panel panel-primary"> 
                              <div class="panel-heading">Editar Cliente</div>
                                  <!-- Cuerpo-->
                              <div class="panel-body"> 
                                <form form id="gracia" action="<?php echo site_url(); ?>Clientes/modificar" method="POST"> 
                                <?php foreach ($variable as $item) { ?> 
                                  <!-- Primer campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <!---ID-->
                                     <input type="hidden" id="id" name="id_cliente" class="form-control" value="<?php echo $item['id_cliente'];?>">
                                  <label for="" class="input-group-addon"> Nombre del cliente:</label>
                                  <input type="text" id="nombre" name="nombre_cliente" class="form-control" value="<?php echo $item['nombre_cliente'];?>"> 
                                  </div>  
                                  <!-- Segundo campo-->
                                  <div class="col-md-12 form-group input-group">
                                  <label for="" class="input-group-addon"> Fecha de nacimiento cliente:</label>
                                   <input type="date" id="fecha" onblur="calculaEdad()" name="fecha_nacimiento_cliente"  value="<?php echo $item['fecha_nacimiento_cliente'];?>" class="form-control" >
                                  </div>                              
                                  <!-- Tercero campo-->
                                  <div class="col-md-12 form-group input-group">
                                      <label for="" class="input-group-addon"> Edad de Cliente:</label>
                                       <input type="text" id="edad" name="edad_cliente" class="form-control"  value="<?php echo $item['edad_cliente'];?>" >
                                  </div>
                                  <!-- Cuarto campo-->
                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon"> Número de DUI:</label>
                                    <input type="text" id="DUI" name="numero_DUI" class="form-control"  value="<?php echo $item['numero_DUI'];?>" required>
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                    <label for="" class="input-group-addon"> Número de NIT:</label>
                                  <input type="text" id="NIT" name="numero_NIT" class="form-control"  value="<?php echo $item['numero_NIT'];?>" required>
                                  </div>

                                  <div class="col-md-12 form-group input-group">
                                  <label for="" class="input-group-addon"> Estado de Cliente:</label>
                                  <select class="form-control" id="estado"  name="estado_cliente">
                        
                                 <?php if($item['estado_cliente']=='Habilitado'){?>
                                  <option value="Habilitado" class="form-control" selected="true">Habilitado</option>
                                  <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                                 <?php }else{?>
                                  <option value="Habilitado" class="form-control" >Habilitado</option>
                                  <option value="Deshabilitado" class="form-control" selected="true">Deshabilitado</option>
    
                                <?php }?>
                                
                              </select>
                                  </div>
                                  <!-- Quinto campo-->
                                  <div class="col-md-12 form-group input-group">
                                     <label for="" class="input-group-addon"> Telefono de cliente:</label>
                                     <input type="text" id="telefono" name="telefono_cliente"  value="<?php echo $item['telefono_cliente'];?>" class="form-control" required>
                                  </div>
                                
                                  <div class="col-md-12 text-center">
                                    
                                    <!-- Boton-->
                                    <button type="submit" class="btn btn-success">Guardar Datos</button>
                                  </div>
                                </form>
                                   <?php }?>
                              </div>   <!-- FIN DEL CUERPO -->          
                            </div>  <!-- FIN DEL Panel -->       
                          </div> 
                        </div>    
                   </div>
                <div class="modal-footer">
                 <a href="<?php echo base_url();?>Clientes/mostrar" class="btn btn-danger">Cerrar</a>
                   
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script type="text/javascript">
  jQuery(function($){
    $("#telefono").inputmask({"mask": " 9999-9999"});
    $("#DUI").inputmask({"mask": " 99999999-9"});
    $("#NIT").inputmask({"mask": " 9999-999999-999-9"});
    });

$(document).ready(function(){
  $('#editar_cliente').modal("show");
});

  function calculaEdad()
{
    var hoy = new Date();
    var nac = new Date(document.getElementById('fecha').value);
    var edad = hoy.getFullYear()-nac.getFullYear();
    document.getElementById('edad').value=edad;
}

</script>