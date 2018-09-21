<?php
	//define('BASEPATH') OR exit('No direct script access allowed');

class Datos_usuario extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('datos_usuario_model','usuario','TRUE');
	}
	public function index()
	{
		
		$usuario=$this->usuario->mostrar();

		$data['dusuario']=$usuario;
		$this->load->view('url_include.php');
		$this->load->view('datos_usuarios_view',$data);
	}
		
		public function cargarIdEmpleado(){
		//$this->load->model('datos_usuario_model','usuario','TRUE'); solo si no renombramos arriba el modelo
		$resultado=$this->usuario->getiienda();
		foreach ($resultado as $item) {
			echo'<option value"'.$item['id_tienda'].'">'.$item['nombre_tienda'].'</option>';
		}
	}

	public function editar()
	{
		$data['variable']=$this->usuario->mostrarById($this->input->get('id'));
		$this->load->view('modificar',$data);

	}


	public function RegistroUsuarios()
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

		$registro=$this->usuario->insertar($data);
		
		if($registro==1){
			$ruta=base_url('Datos_usuario');
			echo "<script>
			alert('Usuario guardado exitosamente');
			window.location='{$ruta};
			'</script>";
			$this->load->view('datos_usuarios_view');
		}
		else{
			//$this->error();
		}
	}
	public function eliminar()
	{
		$eliminar=$_GET['id'];
		$this->usuario->usuario($usuario);
		$this->index();
	}

	public function modificar()
	{
		$data['id']=$_POST['id_usuario'];
		$data['nombre_usuario']=$_POST['nombre_usuario'];
		$data['contraseña_usuario']=$_POST['contraseña_usuario'];
		$data['rol_usuario']=$_POST['rol_usuario'];
		$data['estado_usuario']=$_POST['estado_usuario'];
		$data['id_empleado']=$_POST['id_empleado'];
		$this->usuario->modificar($data);
		$this->index();
	}
}
?>