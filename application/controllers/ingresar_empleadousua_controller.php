<?php
define('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Ingresar_empleados_us extends CI_Model
{
	
	public __construct()
	{
		parent::construct();
		$this->load->model('ingresar_empleadousua_model');
	}

	public function inicio_datosempleado()
	{
		//mostrar datos en una vista
		 $usuarios = $this->datos_empleado_model->getdataempleados();
		$data['usuarios']=$usuarios;
		$this->load->view('mostrar_datos_empleados',$data);
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
	$data['estado_empleado']= $_POST['estado_empleado'];


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
	
	$data['usuario']=$this->datos_empleados_model->obtener_empleados($_POST['editar_tab_empleados']);
	$this->load->view('datos_empleado_view',$data);
	}

	public function editar_tab_empleados()
	{


		$data['numero_empleado']= $_POST['numero_empleado'];
		$data['nombre_empleado']= $_POST['nombre_empleado'];
		$data['DUI_empleado']= $_POST['DUI_empleado'];
		$data['direccion_empleados']= $_POST['direccion_empleados'];
		$data['fecha_nacimiento']= $_POST['fecha_nacimiento'];
		$data['cargo_empleado']= $_POST['cargo_empleado'];
		$data['id_empleado']= $_POST['id_empleado'];
		$data['estado_empleado']= $_POST['estado_empleado'];
		$this->datos_empleados_model->update($data);
		$this->inicio_empleados();
	}

	public function inicio_datosusuario()
	{
		//mostrar datos en una vista
		$usuario=$this->datos_usuario_model->getdatausuario();
		$data['usuario']=$usuario;
		$this->load->view('mostrar_datos_usuario',$data);
	}
	public function agregar_usuario()
	{
		$data['nombre_usuario']= $_POST['nombre_usuario'];
		$data['contraseña_usuario']= $_POST['contraseña_usuario'];
		$data['rol_usuario']= $_POST['rol_usuario'];
		$data['id_empleado']= $_POST['id_empleado'];
		$data['estado_usuario']= $_POST['estado_usuario'];

		$this->datos_usuario_model->insertar_usuarios($data);
		//ingresar los datos en la funcion que inserta los datos para mostrarlos en otra vista
		self::inicio_usuario();
	}
	public function eliminar_usuarios()
	{
		$nombre= $_POST['id_empleado'];
		$this->datos_usuario_model->deshabilitar_usuarios($id_empleado,$estado_usuario);
	}
	public function accion_usuarios()
	{
		$data['usuario']=$this->datos_usuario_model->obtener_usuarios($_POST['editar_tab_usuarios']);
	}
	public function editar_tab_usuarios()
	{
		$data['nombre_usuario']= $_POST['nombre_usuario'];
		$data['contraseña_usuario']= $_POST['contraseña_usuario'];
		$data['rol_usuario']= $_POST['rol_usuario'];
		$data['id_empleado']= $_POST['id_empleado'];
		$data['estado_usuario']= $_POST['estado_usuario'];

		$this->datos_usuario_model->update($data);
		$this->inicio_usuario();

	}
}


?>