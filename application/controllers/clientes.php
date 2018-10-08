<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 Controlador para hacer el CRUD de los proveedores
 */
class Clientes extends CI_Controller
{
    
  public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('Cliente_model','cliente',TRUE); 
    }

    public function index()
    {  	$this->load->view('url_include');
        $this->load->view('Plantilla/navbar');
        $cliente= $this->cliente->mostrar();
    	$data['dcliente']=$cliente;
    	$this->load->view('clientes_view', $data);
    	$this->load->view('Plantilla/footer');
    }

  
    public function editar()
    {   
    	$this->load->view('url_include');
    	$this->load->view('Plantilla/navbar');
    	$data['variable']=$this->cliente->getMostrar($this->input->get('id'));
    	$this->load->view('editar_clientes', $data);
    	$this->load->view('Plantilla/footer');
    }

      //Insertar registros a base de datos//
        public function RegistroCliente()
        {  //Obteniendo datos del formulario, los cuales los almacenaremos en una variable 

        	//$id_cliente=$this->input->post('id_cliente');
        	$nombre =$this->input->post('nombre_cliente');
        	$nacimiento =$this->input->post('fecha_nacimiento_cliente');
        	$edad =$this->input->post('edad_cliente');
			$dui = $this->input->post('numero_DUI');
			$nit = $this->input->post('numero_NIT');
			$estado =$this->input->post('estado_cliente');
			$telefono = $this->input->post('telefono_cliente'); 

        	//mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Proveedores de la Base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correspondiente de la informacion que se mande del formulario.
				$data=array
				(	
					//'id_cliente'=>$id_cliente,
					'nombre_cliente'=>$nombre,
					'fecha_nacimiento_cliente'=>$nacimiento,
					'edad_cliente'=>$edad,
					'numero_DUI'=>$dui,
					'numero_NIT'=>$nit,
					'estado_cliente' =>$estado,
					'telefono_cliente'=>$telefono 
				); 

				//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array. 
				$registro=$this->cliente->insertar($data); 
              
				if($registro==1){
					
                     echo 1;
				}
				else{
					echo 0;
				}
        }

        /*  public function eliminar()
        {
        	
			$eliminar = $_GET['id'];
			$this->cliente->eliminar($eliminar);
			$this->index();

		}*/


		public function modificar()
		{

			$data ['id'] = $_POST['id_cliente'];
			$data ['nombre'] = $_POST['nombre_cliente'];
			$data ['nacimiento'] = $_POST['fecha_nacimiento_cliente'];
			$data ['edad'] = $_POST['edad_cliente'];
			$data ['dui'] = $_POST['numero_DUI'];
			$data ['nit'] = $_POST['numero_NIT'];
			$data ['estado'] = $_POST['estado_cliente'];
			$data ['telefono'] = $_POST['telefono_cliente'];
			$this->cliente->update($data);
			$this->editar();

		}

        	public function mostrar()
		{

    	$cliente= $this->cliente->mostrar();
    	$data['dcliente']=$cliente;  //enviamos la variable vacia, para que cuando le mandemos paramentros no me de el error de variable indefinida
    	$this->load->view('url_mostrar_e_h');
    	$this->load->view('Plantilla/navbar');
    	$this->load->view('mostrar_clientes',$data);
    	$this->load->view('Plantilla/footer');
		}



}
