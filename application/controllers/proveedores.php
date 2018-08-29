<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 Controlador para hacer el CRUD de los proveedores
 */
class Proveedores extends CI_Controller
{
    
    public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('proveedores_model', 'proveedores', TRUE); //Forma de como cargar el modelo para poder acceder a sus metodos, en el primer paramentro se pone el nombre del modelo, en el segundo se le esta asignando un nombre diferente al modelo y en el tercero se le pondra TRUE para que se conecte automaticamente a la base de datos 
    }

    public function index(){
    	//$this->load
    	$proveedores= $this->proveedores->mostrar();
    	//$data['insertar']=""; 
    	$data['dproveedores']=$proveedores;  //enviamos la variable vacia, para que cuando le mandemos paramentros no me de el error de variable indefinida
    	$this->load->view('ingresarproveedores_view', $data);
    }

        public function Registrar_proveedores()
        {  //Obteniendo datos del formulario, los cuales los almacenaremos en una variable 

        	//$id_proveedores=$this->input->post('id_proveedor');
        	$nombre_empresa=$this->input->post('nombre_empresa');
        	$tipo_empresa=$this->input->post('tipo_empresa');
        	$representante_empresa=$this->input->post('representante_empresa');
        	$contacto_proveedores=$this->input->post('contacto_proveedores');
        	$estado_proveedores=$this->input->post('estado_proveedores'); 

        	//mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Proveedores de la Base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correspondiente de la informacion que se mande del formulario.
				$data=array
				(	
					//'id_proveedores'=>$id_proveedores,
					'nombre_empresa'=>$nombre_empresa,
					'tipo_empresa'=>$tipo_empresa,
					'representante_empresa'=>$representante_empresa,
					'contacto_proveedores'=>$contacto_proveedores, 
					'estado_provedores'=>$estado_proveedores, 
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

        public function mostrar_proveedores()
        {
        	$proveedores= $this->proveedores->mostrar(); 
        	$data['dproveedores']=$proveedores; 
        	$this->load->view('mostrarproveedores_view', $data); 

        }
}

