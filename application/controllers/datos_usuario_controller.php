<?php
define('BASEPATH') OR exit('No direct script access alowed');

/**
 * 
 */
class Datos_usuario extends CI_Controller
{
	
	public __construct()
	{
		parent::construct();
		$this->load->model('datos_usuario_model');
	}

	public function inicio_usuario()
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
	//funcion eliminar de la base de datos cambiar a datos estado desabilitado
	/*public function eliminar_usuarios()
		{
			//buscar el id empleado y cambiar el estado del empleado para dehabilitado
			$id_usuario = $_POST['id_usuario'];
			$this->datos_usuarios_model->deshabilitar_usuarios('id_empleado');
			//$this-> inicio_usuario();

		}*/
}

?>