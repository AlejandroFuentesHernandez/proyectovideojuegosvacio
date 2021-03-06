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

    public function index(){ //Esta funcion se ejecutara por defecto cuando se ingrese al controlador, en ella se muestra los datos de la base
                $this->load->view('url_include');
                $this->load->view('Plantilla/navbar');
    	    	$proveedores= $this->proveedores->mostrar();
                $data['dproveedores']=$proveedores; 
                $this->load->view('ingresarproveedores_view', $data);
                $this->load->view('Plantilla/footer');
    }

    public function Registrar_proveedores()
        {  //Obteniendo datos del formulario, los cuales los almacenaremos en una variable 

        	//$id_proveedores=$this->input->post('id_proveedor');
        	$nombre_empresa=$this->input->post('nombre_empresa');
        	$tipo_persona=$this->input->post('tipo_persona');
        	$representante_empresa=$this->input->post('representante_empresa');
            $direccion_proveedores=$this->input->post('direccion_proveedores');
            $correo_proveedores=$this->input->post('correo_proveedores'); 
        	$contacto_proveedores=$this->input->post('contacto_proveedores');
        	$estado_provedores=$this->input->post('estado_provedores'); 


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
                 if($registro==1){
                 echo 1;
                }else{
                 echo 0; 
                }
        }
    /*public function eliminar()
        {
            
        $eliminar = $_GET['idp'];
        $this->proveedores->eliminar($eliminar);
        $this->index();

        }*/

    public function mostrarId()
    {      
        $this->load->view('url_include');
        $this->load->view('Plantilla/navbar');
        $data['editarprov']=$this->proveedores->mostrarById($this->input->get('idp'));
        $this->load->view('editar_proveedores_view', $data);
        $this->load->view('Plantilla/footer');
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
            $this->mostrar();

        }

    public function mostrar()
        {
         $proveedores= $this->proveedores->mostrar();
         $data['dproveedores']=$proveedores;  //enviamos la variable vacia, para que cuando le mandemos paramentros no me de el error de variable indefinida
        $this->load->view('url_mostrar_e_h');
        $this->load->view('Plantilla/navbar');
        $this->load->view('mostrarproveedores_view', $data);
        $this->load->view('Plantilla/footer');

        }
}


       