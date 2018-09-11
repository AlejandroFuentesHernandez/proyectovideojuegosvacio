<?php
	define('BASEPATH') OR exit('No direct script access allowed');
/**
	controlador para hacer el crud de los proveedores
*/
	class Datos_empleado extends CI_Controller{

		public function __construct()
		{
			parent::__construct();//constructor del padre
			$this->load->model('empleado_model','empleado',true);//forma de cargar el modelo para poder acceder a sus metodos, en el primer parametro sepone el nombre del modelo, en el segundo se le esta asignado un nombre diferente al modelo y en el tercero se le pondra TRUE para que se conecte automaticamente a la base de datos
		}

//Mostrar datos ingresados
		public function index()
		{
			//$this->load
			$empleado=$this->empleado->mostrar();
			//$data['insertar']="";
			$data['dempleado']=$empleado;//enviamos la variable vacia,para que cuando le mandemos parametros no me de el error de variable indefinida
			$this->load->view('datos_emplados_view',$data);
			
		}
		//Insertar registros a base de datos
		public function registroempleados()
		{
			
			//obteniendo datos del formulario, los cuales los almacenaremos en una variable
			//$id_empleados=$this->input->post('id_empleados');
			$numero_empleado=$this->post('numero_empleado');
			$nombre_empleado=$this->post('nombre_empleado');
			$DUI_empleado=$this->post('DUI_empleado');
			$direccion_empleado=$this->post('direccion_empleado');
			$fecha_nacimiento=$this->post('fecha_nacimiento');
			$cargo_empleado=$this->post('cargo_empleado');
			$correo_empleado=$this->post('correo_empleado');
			$telefono_empleado=$this->post('telefono_empleado');
			$estado_empleado=$this->post('estado_empleado');
			$id_tienda=$this->post('id_tienda');
			/*mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Empleado de la base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correspondiente de la informacion que se mande del formulario*/
			$data=array
			(
				//'id_empleados'=>$id_empleados,
				'numero_empleado'=>$numero_empleado,
				'nombre_empleado'=>$nombre_empleado,
				'DUI_empleado'=>$DUI_empleado,
				'direccion_empleado'=>$direccion_empleado,
				'fecha_nacimiento'=>$fecha_nacimiento,
				'cargo_empleado'=>$cargo_empleado,
				'correo_empleado'=>$correo_empleado,
				'telefono_empleado'=>$telefono_empleado,
				'estado_empleado'=>$estado_empleado,
				'id_tienda'=>$id_tienda
			);
			//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parameor el array
			$registro=$this->empleado->insertar($data);
			$mensaje['insertar']="Registro exitoso";//no olvidar borrar mensaje!!!!!!xd

			if($registro==1){
				$ruta=base_url('Datos_empleado');
				echo "<script> 
				alert('');
				window.location='{$ruta}';
				</script>";
				$this->load->view('datos_emplados_view',$mensaje);
			}
			else{
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