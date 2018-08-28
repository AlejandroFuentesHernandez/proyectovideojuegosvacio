<?php
define('BASEPATH') OR exit('No direct script access allowed');

class Datos_empleados extends CI_Controller
{
	public __construt()
	{
		parent::cosntruct();
		$this->load->model('datos_empleado_model');
	}


	
	public function inicio_empleados()
	{
	//mostrar datos en una vista
		 $usuarios = $this->datos_empleado_model->getdataempleados();
		$data['usuarios']=$usuarios;
		$this->load->view->mostrar datos empleado('mostrar_datos_empleados',$data);

	}

	public function agregar_empleado()
	{


	//ingresar datos del post en variables $data
	$data['numero_empleado']= $_POST['numero_empleado'];
	$data['nombre_empleado']= $_POST['nombre_empleado'];
	$data['DUI_empleado']= $_POST['DUI_empleado'];
	$data['direccion_empleados']= $_POST['direccion_empleados'];
	$data['fecha_nacimiento']= $_POST['fecha_nacimiento'];
	$data['cargo_empleado']= $_POST['cargo_empleado'];
	$data['id_tienda']= $_POST['id_tienda'];
	$data['estado_usuario']= $_POST['estado_usuario'];


	$this->datos_empleado_model->insertar_empleados($data);
	//ingresar los datos en la funcion que inserta los datos para mostrarlos en otra vista
	self::inicio_empleados();

	}
	
	public function eliminar_empleado()
	{

		$nombre= $_POST['numero_empleado'];
		$this->datos_empleado_model->deshabilitar_empleados($numero_empleado,$estado_usuario);

	}
	
	public function accion_empleados()
	{
	
	$data['usuario']=$this->datos_empleados_model->obtener_usuarios($_POST['editar_tab_empleados']);
	$this->load->view('datos_empleado_view',$data);
	}

	
	public function editar_tab_empleados()
	{


		$data['numero_empleado']=$_POST['numero_empleado'];
		$data['nombre_empleado']=$_POST['nombre_empleado'];
		$data['DUI_empleado']=$_POST['DUI_empleado'];
		$data['direccion_empleados']=$_POST['direccion_empleados'];
		$data['fecha_nacimiento']=$_POST['fecha_nacimiento'];
		$data['cargo_empleado']=$_POST['cargo_empleado'];
		$data['id_empleado']= $_POST['id_empleado'];
		$data['estado_usuario']=$_POST['estado_usuario'];
		$this->datos_empleados_model->update($data);
		$this->inicio_empleados();
	}
	//funcion eliminar de la base de datos cambiar a datos estado desabilitado
	/*public function eliminar_empleado()
		{
			//buscar el numero de empleado y cambiar el estado del empleado para dehabilitado
			$numero_empleado = $_POST['numero_empleado'];
			$this->datos_empleado_model->deshabilitar_empleados($numero_empleado);
			//$this-> inicio_empleados();

		}*/
}
?>