<?php
//define('BASEPATH') OR exit('No direct script access allowed');

//controlador para hacer el crud de la tienda

	
	class Tienda extends CI_Controller
	{
		public function __construct()
		{
		parent:: __construct();
		$this->load->model('Tienda_model','tienda',TRUE);
		/*
		forma de cargar el mosdelo para poder acceder a sus metodos, en el primer parametro se pone el nombre del modelo, en le pondra TRUE para que se conecte automaticamente a la base de datos
		*/

		}
		//Mostrar datos ingresados
		public function index()
		{
			$this->load->view('Plantilla/navbar');
			$this->load->view('urlcompleto');
			$tienda=$this->tienda->mostrar();
			$data['dtienda']=$tienda;//enviamos la variable vacia, para que cuando le mandemos paramentros no me de el error de variable indefinida
			$this->load->view('tienda_view',$data);
			$this->load->view('plantilla/footer');	
		}

		public function editar()
		{
			$this->load->view('urlcompleto');
			$this->load->view('Plantilla/navbar');
			$data['dtienda']=$this->tienda->getmostrar($this->input->get('id'));
			$this->load->view('modificar_tienda',$data);
			$this->load->view('Plantilla/footer');
		}
		//Insertar registros a base de datos//
		public function RegistroTienda()
		{
			//Obteniendo datos del formulario, los cuales los almacenaremos en una variable 

        	//$id_tienda=$this->input->post('id_tienda');
        	$nombre_tienda=$this->input->post('nombre_tienda');
			$direccion_tienda=$this->input->post('direccion_tienda');
			$telefono_tienda=$this->input->post('telefono_tienda');

			//mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Tienda de la base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correpondiente de la informacion que se mande del formulario
        	
        	$data=array(
					//'id_tienda'=>$id_tienda,
					'nombre_tienda'=>$nombre_tienda,
					'direccion_tienda'=>$direccion_tienda,
					'telefono_tienda'=>$telefono_tienda
				);
        	//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array. ingresrat es adquisicion
        	$ingresar=$this->tienda->insertar($data);
        	//$mensaje['insertar']="registro exitoso";

        	if($ingresar==1)
        	{
        		$ruta=base_url('Tienda');

        		echo "<script>
        			alert('Tienda guardada satisfactoriamente.');
        			window.location='{$ruta}';
        		</script>";
        		$this->load('tienda_view');
        	}
        	else
        	{
        		$this->error();
        	}
		}
		public function modificar()
		{
			$data['id']= $_POST['id_tienda'];
			$data['nombre_tienda']= $_POST['nombre_tienda'];
			$data['direccion_tienda']= $_POST['direccion_tienda'];
			$data['telefono_tienda']= $_POST['telefono_tienda'];
			//$this->tienda->update($data);
			$resultado=$this->tienda->update($data);
			if($resultado)
			{
				$dato['msg']="Exito tienda actualizado";
			}else
			{
				$dato['msg']="Error tienda no actualizada";
			}
			$this->load->view('urlcompleto');
			$this->load->view('notificacion_tienda',$dato);
		}

		public function visualizar()
		{
			$tienda=$this->tienda->mostrar();
			$data['dtienda']=$tienda;

			$this->load->view('urlcompleto');
			$this->load->view('Plantilla/navbar');
			$this->load->view('mostrar_tienda',$data);
			$this->load->view('Plantilla/footer');
		}

	}

?>
