<!DOCTYPE html>
<html lang="en">
    <?php require 'application/views/Plantilla/navbar.php';?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo site_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo site_url();?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad existente</th>
                                        <th>Stock minimo</th>
                                        <th>Precio Venta</th>
                                        <th>Fecha de ingreso</th>
                                        <th>Estado Invenatario</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>

                                 <tbody>
                                    <?php foreach ($detalle as $inv): ?>
                                    <tr>
                                        <td><?=$inv->nombre_juego?></td>
                                        <td><?=$inv->cantidad_existente?></td>
                                        <td><?=$inv->stock_minimo?></td>
                                        <td><?=$inv->precio_venta?></td>
                                        <td><?=$inv->fecha_ingreso?> </td>
                                        <td><?=$inv->estado_inventario?> </td>
                                        <td>
                                         <a href="<?php echo base_url();?>Inventario/mostrarId?idi=<?php echo $inv->id_inventario;?>" class="btn btn-info">Editar</a>
                                        </td>           
                           
                                    </tr>
             
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
  
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

  
    <!--FINALIZA APLICACION-->
  <?php require 'application/views/Plantilla/footer.php' ;?>   
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