<?php
	//define('BASEPATH') OR exit('No direct script access allowed');

class Datos_usuario extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('datos_usuario_model');
	}
	public function index()
	{
		
		$usuario=$this->datos_usuario_model->mostrar();

		$data['dusuario']=$usuario;

		$this->load->view('datos_usuarios_view',$data);
	}
	public function registrousuarios()
	{
	
		//$id_usuario=$this->post('id_usuario');
		$nombre_usuario=$this->input->post('nombre_usuario');
		$contraseña_usuario=$this->input->post('contraseña_usuario');
		$rol_usuario=$this->input->post('rol_usuario');
		$estado_usuario=$this->input->post('estado_usuario');
		$id_empleado=$this->input->post('id_empleado');

		$data=array
		(
			//'id_usuario'=>$id_usuario,
			'nombre_usuario'=>$nombre_usuario,
			'contraseña_usuario'=>$contraseña_usuario,
			'rol_usuario'=>$rol_usuario,
			'estado_usuario'=>$estado_usuario,
			'id_empleado'=>$id_empleado

		);

		$registro=$this->datos_usuario_model->insertar($data);
		
		if($registro==1){
			$ruta=base_url('Datos_usuario');
			echo "<script>
			alert('ingresado exitosamente');
			window.location='{$ruta};
			'</script>";
			$this->load->view('datos_usuarios_view');
		}
		else{
			$this->error();
		}
	}
	public function eliminar()
	{
		$eliminar=$_Get['id'];
		$this->datos_usuario_model->usuario($usuario);
		$this->index();
	}
}
?>