<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clientes</title>
</head>

<body>

    <div id="wrapper">


<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
        <div id="page-wrapper" class="responsive">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3> Clientes </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" class="table-responsive">
 <!-- TABLA PARA MOSTRAR DATOS-->
                       <table width="100%" class="table table-striped table-bordered table-hover" id="tab_clientes">
                         <thead style="text-align:center;">
                            <tr>
                                <th >Nombre de cliente</th>
                                <th>Fecha de nacimiento</th>
                                <th>Edad de cliente</th>
                                <th>Número de DUI</th> 
                                <th>Número de NIT</th>
                                <th>Estado de cliente</th>
                                <th>Telefono de cliente</th>
                               <!-- <th>Eliminar</th>-->
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dcliente as $dc):?>
 
                            <tr>
                                <!-- <td><input type="radio" name="editar" value="<?=$u->idContacto?>"/></td> -->
                                <td><?=$dc->nombre_cliente?></td>
                                <td><?=$dc->fecha_nacimiento_cliente?></td>
                                <td><?=$dc->edad_cliente?></td>
                                <td><?=$dc->numero_DUI?></td>
                                <td><?=$dc->numero_NIT?></td>
                                <td><?=$dc->estado_cliente?></td>
                                <td><?=$dc->telefono_cliente?></td>
                              <!--  <td><a href="<?php //echo base_url(); ?>Clientes/eliminar?id=<?php //echo $dc->id_cliente;?>">Eliminar</a></td>-->
                                <td><a href="<?php echo base_url(); ?>Clientes/editar?id=<?php echo $dc->id_cliente;?>" class="btn btn-info">Modificar</a></td>
                               
                            </tr>
             
                            <?php endforeach;?>
                        </tbody>
                      </table>
  
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
        <!-- /AQUI TERMINA LO QUE SE MUESTRA -->

    </div>
    <!-- /#wrapper -->

    <!-- DataTables JavaScript -->
    <script src="<?php echo site_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>dist/js/sb-admin-2.js"></script>  
</body>

</html>

  
    <script>
    $(document).ready(function() {
        //Page-Level Demo Scripts - Tables - Use for reference 
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "url": "js/lenguaje.js"
            }
             
        });
    });
    </script>













    
        