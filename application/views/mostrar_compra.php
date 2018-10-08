<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compras</title>

</head>

<body>

    <div id="wrapper">


<!--ESTO ES EL ESPACIO PARA MOSTRAR EN PANTALLA-->
        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3> Compras </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" class="table-responsive">
 <!-- TABLA PARA MOSTRAR DATOS-->
                       <table width="100%" class="table table-striped table-bordered table-hover" id="tab_compras">
                         <thead>
                            <tr>
                                <th>Codigo de juego</th>
                                <th>Nombre de juego</th>
                                <th>Cantidad producto</th>
                                <th>Fecha de compra</th> 
                                <th>Precio U.Compra</th>
                                <th>Total de compra</th>
                               <!-- <th>Eliminar</th>-->
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dcompra as $dc):?>
 
                            <tr>
                                <!-- <td><input type="radio" name="editar" value="<?=$u->id_compra?>"/></td> -->
                                <td><?=$dc->codigo_juego?></td>
                                <td><?=$dc->nombre_juego?></td>
                                <td><?=$dc->cantidad_juego?></td>
                                <td><?=$dc->fecha_compra?></td>
                                <td><?=$dc->precio_unitario_compra?></td>
                                <td><?=$dc->total_compra?></td>
                                <!--<td><a href="<?php// echo base_url(); ?>Compra/eliminar?id=<?php //echo $dc->id_compra;?>">Eliminar</a></td>-->
                                <td><a href="<?php echo base_url(); ?>Compra/editar?id=<?php echo $dc->id_compra;?>"class="btn btn-info">Modificar</a></td>
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

