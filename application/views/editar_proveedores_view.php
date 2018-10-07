<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Proveedores</title>
</head>
<body>
<!-- INICIO MODAL EN EL SE PODRA EDITAR PROVEEDORES-->
<div class="modal fade" data-backdrop="static"  id="editar_proveedor"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- Establece el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Editar Proveedores</div>
              <!-- heading-->
              <div class="panel-body">
                <form id="formProv" action="<?php echo site_url(); ?>Proveedores/modificar" method="POST">
                 <?php foreach ($editarprov as $item) { ?> 
                  <!-- ID PROVEEDORES, ESTE CAMPO NO SE VISUALIZA-->
                  <input type="hidden" name="id_proveedores" value="<?php echo $item['id_proveedores'];?>"/>  
                 <!-- Primer campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon"> Nombre de la empresa:</label>
                    <input type="text" id="nombre" name="nombre_empresa" class="form-control" value="<?=$item['nombre_empresa'];?>" >
                 </div>
                 <!-- Segundo campo--> 
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon"> Tipo de persona:</label>
                    <select class="form-control" id="tipo" name="tipo_persona">
                      <?php if($item['tipo_persona']=='Natural'){?>
                        <option value="Natural" class="form-control" selected="true">Natural</option>
                        <option value="Juridica" class="form-control">Juridica</option>
                      <?php }else{?>
                        <option value="Natural" class="form-control">Natural</option>
                        <option value="Juridica" class="form-control" selected="true">Juridica</option>
                      <?php }?>
                    </select>
                 </div>
                 <!-- Tercero campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon"> Representante:</label>
                    <input type="text" id="repre" name="representante_empresa" class="form-control" value="<?=$item['representante_empresa'];?>"> 
                 </div>
                 <!-- Cuarto campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon"> Direccion:</label>
                    <input type="text" id="direccion" name="direccion_proveedores" class="form-control" value="<?=$item['direccion_proveedores'];?>">
                 </div>
                 <!-- Quinto campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon"> Email:</label>
                    <input type="email" id="correo" name="correo_proveedores" class="form-control" value="<?=$item['correo_proveedores'];?>">
                 </div>
                 <!-- sexto campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon">Contacto:</label>
                    <input type="text" id="contacto" name="contacto_proveedores" class="form-control" value="<?=$item['contacto_proveedores'];?>">
                 </div>
                 <!-- septimo campo-->
                 <div class="col-md-12 form-group input-group">
                    <label for="" class="input-group-addon">Estado:</label>
                    <select class="form-control" id="estado" name="estado_provedores">
                      <?php if($item['estado_provedores']=='Habilitado'){?>
                        <option value="Habilitado" class="form-control" selected="true">Habilitado</option>
                        <option value="Deshabilitado" class="form-control">Deshabilitado</option>
                      <?php }else{?>
                        <option value="Habilitado" class="form-control" >Habilitado</option>
                        <option value="Deshabilitado" class="form-control" selected="true">Deshabilitado</option>
                      <?php }?>
                    </select>
                 </div>
                <!-- Boton-->
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
              </form>
              <?php }?>
                
              </div>
              <!-- fin panel body-->
            </div>
            <!-- panel-->
          </div>
          <!-- col-->
        </div>
        <!-- row-->
      </div>
      <!-- modal-body-->
              <div class="modal-footer">
               <a href="<?php echo base_url();?>Proveedores/mostrar" class="btn btn-danger">Close</a>
              </div>
              <!-- modal-footer-->
    </div>
    <!-- modal-content-->
  </div>
  <!-- modal-dialo-->
</div>
<!-- modal-->
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#editar_proveedor').modal("show");
});
</script>