<?php
define('BASEPATH') OR exit('No direct script access allowed');

//controlador para hacer el crud de la tienda

	
	class Tienda extends CI_Controller
	{
		public function __construct()
		{
		parent __construct();
		$this->load->model('tienda_model');
		/*
		forma de cargar el mosdelo para poder acceder a sus metodos, en el primer parametro se pone el nombre del modelo, en le pondra TRUE para que se conecte automaticamente a la base de datos
		*/

		}
		//Mostrar datos ingresados
		public function index()
		{
			//$this->load
			$tienda=$this->tienda_model->mostrar();

			//$data['insertar']="";
			$data['dtienda']=$tienda;
			/*enviamos la variable vacia, para que cuando le mandemos parametros no me de el error de variable indefinida*/
			$this->load->view('tienda_view',$data);
		}
		//Insertar registros a base de datos
		public function registrotienda()
		{
			//obteniendo datos del formulario, los cuales los almacenaremos en una variable 
			//$id_tienda=$this->input->post('id_tienda');
			$nombre_tienda=$this->input->post('nombre_tienda');
			$direccion_tienda=$this->input->post('direccion_tienda');
			$telefono_tienda=$this->input->post('telefono_tienda');
			/*
				mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Tienda de la base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correpondiente de la informacion que se mande del formulario
			*/
				$data=array(
					//'id_tienda'=>$id_tienda,
					'nombre_tienda'=>$nombre_tienda,
					'direccion_tienda'=>$direccion_tienda,
					'telefono_tienda'=>$telefono_tienda
				);
				//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array
				$registro=$this->tienda_model->insertar($data);
				//$mensaje['insertar']="Registro exitoso";

				if($registro==1)
				{
					$ruta=base_url('Tienda');
					echo "<script>
					alert('ingresado exitosamente');
					window.location='{$ruta}';
					</script>";
				}
				else
				{
					$this->error();
				}
			}
			public function eliminar()
			{
				$eliminar=$_GET['id'];
				$this->empleado->empleado($empleado);
				$this->index();
			}
	}


?>
