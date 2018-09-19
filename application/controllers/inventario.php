<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 Controlador para hacer el CRUD de los proveedores
 */
class Inventario extends CI_Controller
{
    
    public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('inventario_model','inventario',TRUE); 
    }

    public function index()
    { 
    	$this->load->view('registro_inventario_view');
    }

    public function cargarjuego()
    {
        $resultado=$this->inventario->getJuego();
        foreach($resultado as $item){
            echo '<option value="'.$item['id_compra'].'">'.$item['nombre_juego'].'</option>';
        }
    }

      public function cargar_existencia()
    {   
        $id_juego=$this->input->post('id');
        echo $this->inventario->getExistencia($id_juego);       
    }
    /*public function Registrar_inventario()
    {  

            //$id_proveedores=$this->input->post('id_proveedor');
        	$nombre_juego=$this->input->post('nombre_juego');
        	$cantidad_existente=$this->input->post('cantidad_existente');
        	$stock_minimo=$this->input->post('$stock_minimo');
            $precio_venta=$this->input->post('precio_venta');
            $fecha_ingreso=$this->input->post('fecha_ingreso'); 
        	$estado_inventario=$this->input->post('estado_inventario');
        	

        	//mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Proveedores de la Base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correspondiente de la informacion que se mande del formulario.
				$data=array
				(	
					//'id_proveedores'=>$id_proveedores,
					'nombre_empresa'=>$nombre_empresa,
					'tipo_persona'=>$tipo_persona,
					'representante_empresa'=>$representante_empresa,
                    'direccion_proveedores'=>$direccion_proveedores,
                    'correo_proveedores'=>$correo_proveedores,
					'contacto_proveedores'=>$contacto_proveedores, 
					'estado_provedores'=>$estado_provedores, 
				); 

				//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array. 
				$registro=$this->proveedores->insertar($data); 
				$mensaje['insertar']="Registro exitoso"; //NO OLVIDAR BORRAR MENSAJE!!!!! xD 
              
				if($registro==1){
					$ruta=base_url('Proveedores');

					echo "<script>
							alert('Proveedor guardado satifactoriamente.');
							window.location= '{$ruta}'; 
							</script>";
					$this->load->view('ingresarproveedores_view', $mensaje);
					

				}
				else{
					$this->error();
				}
    }

   /* public function eliminar()
        {
            
        $eliminar = $_GET['idp'];
        $this->proveedores->eliminar($eliminar);
        $this->index();

        }

    public function mostrarId()
    {        
        $data['editarprov']=$this->proveedores->mostrarById($this->input->get('idp'));
        $this->load->view('editar_proveedores_view', $data);
    }


    public function modificar()
        {

            $data ['id'] = $_POST['id_proveedores'];
            $data ['nombre'] = $_POST['nombre_empresa'];
            $data ['tipo'] = $_POST['tipo_persona'];
            $data ['representante'] = $_POST['representante_empresa'];
            $data ['direccion'] = $_POST['direccion_proveedores'];
            $data ['correo'] = $_POST['correo_proveedores'];
            $data ['contacto'] = $_POST['contacto_proveedores'];
            $data ['estado'] = $_POST['estado_provedores'];
            $this->proveedores->modificar($data);
            $this->index();

        }

       /*public function mostrar_proveedores() esta funcion ya se realizo arriba
        {
        	$proveedores= $this->proveedores->mostrar(); 
        	$data['dproveedores']=$proveedores; 
        	$this->load->view('mostrarproveedores_view', $data); 

        }*/
}

