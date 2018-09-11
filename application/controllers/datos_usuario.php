<?php
	define('BASEPATH') OR exit('No direct script access allowed');

class Datos_u extends CI_Controller{
	public function__construct()
	{
		parent::__construct();
		$this->load->model('datos_usuario_model');
	}
	public function index()
	{
		$usuario=$this->empleado->mostrar();

		$data['dusuario']=$usuario;

		$this->load->view('',$data);
	}
	public function registrousuarios()
	{
		//$id_usuario=$this->post('id_usuario');
		$nombre_usuario=$this->post('nombre_usuario');
		$contraseña_usuario=$this->post('contraseña_usuario');
		$rol_usuario=$this->post('rol_usuario');
		$estado_usuario=$this->post('estado_usuario');
		$id_empleado=$this->post('id_empleado');

		$data=array
		(
			//'id_usuario'=>$id_usuario,
			'nombre_usuario'=>$nombre_usuario,
			'contraseña_usuario'=>$contraseña_usuario,
			'rol_usuario'=>$rol_usuario,
			'estado_usuario'=>$estado_usuario,
			'id_empleado'=>$id_empleado

		);

		$registro=$this->usuario->insertar($data);
		$mensaje['insertar']='Registro exitoso';

		if($registro==1){
			$ruta=base_url('Datos_u');
			echo "<script>
			alert('');
			window.location='{$ruta};
			'</script>";
			$this->load->view('datos_usuarios_view',$mensaje);
		}
		else{
			$this->error();
		}
	}
	public function eliminar()
	{
		$eliminar=$_Get['id'];
		$this->usuario->usuario($usuario);
		$this->index();
	}
}
?>