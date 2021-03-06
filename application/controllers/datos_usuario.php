<?php
	//define('BASEPATH') OR exit('No direct script access allowed');

	//controlador para hacer el crud de los usuario

class Datos_usuario extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Datos_usuario_model','usuario',TRUE);
	}
	public function index()
	{
		$this->load->view('urlcompleto');
		$this->load->view('Plantilla/navbar');
		$usuario=$this->usuario->mostrar();
		$data['dusuario']=$usuario;
		$this->load->view('datos_usuarios_view',$data);
		$this->load->view('Plantilla/footer');	
	}
	public function editar()
	{
		$this->load->view('urlcompleto');
		$this->load->view('Plantilla/navbar');
		$data['dusuario']=$this->usuario->getmostrar($this->input->get('id'));
		$this->load->view('editar_usuario',$data);
		$this->load->view('Plantilla/footer');

	}
	public function RegistroUsuario()
	{
	
		//$id_usuario=$this->post('id_usuario');
		$nombre_usuario=$this->input->post('nombre_usuario');
		$contraseña_usuario=md5($this->input->post('contraseña_usuario'));
		$rol_usuario=$this->input->post('rol_usuario');
		$estado_usuario=$this->input->post('estado_usuario');
		$id_empleados=$this->input->post('id_empleado');

		$data=array
		(
			//'id_usuario'=>$id_usuario,
			'nombre_usuario'=>$nombre_usuario,
			'contraseña_usuario'=>$contraseña_usuario,
			'rol_usuario'=>$rol_usuario,
			'estado_usuario'=>$estado_usuario,
			'id_empleado'=>$id_empleados

		);

		$ingresar=$this->usuario->insertar($data);
		
		if($ingresar==1){
			$ruta=base_url('Datos_usuario');
			echo "<script>
			alert('Usuario guardado exitosamente');
			window.location='{$ruta};
			'</script>";
			$this->index();
		}
		else{
			$this->error();
		}
	}
	public function modificar()
	{
		$data['id']=$_POST['id_usuario'];
		$data['nombre_usuario']=$_POST['nombre_usuario'];
		//$data['contraseña_usuario']=$_POST['contraseña_usuario'];
		$data['rol_usuario']=$_POST['rol_usuario'];
		$data['estado_usuario']=$_POST['estado_usuario'];
		$data['id_empleado']=$_POST['id_empleado'];
		//$this->usuario->update($data);
		$resultado=$this->usuario->update($data);
		if($resultado){
			$dato['msg']="Exito usuario actualizado";
		}else{
			$dato['msg']="Error el usuario no pudo ser actualizado";
		}
		$this->load->view('urlcompleto');

		$this->load->view('notificacion',$dato);
		//$this->mostrar();
	}

	public function mostrar()
	{
		$usuario=$this->usuario->mostrar();
		$data['dusuario']=$usuario;

		$this->load->view('Plantilla/navbar');
		$this->load->view('urlcompleto');
		$this->load->view('mostrar_usuarios_view',$data);
		$this->load->view('Plantilla/footer');
	}
		
		public function cargaridEmpleado(){
		//$this->load->model('datos_usuario_model','usuario','TRUE'); solo si no renombramos arriba el modelo
		$resultado=$this->usuario->getIdEmpleado();
		foreach ($resultado as $item) {
			echo'<option value="'.$item['id_empleados'].'">'.$item['nombre_empleado'].'</option>';
		}
		
	}
	public function cargarEstado(){
		$resultado=$this->usuario->getestado();
		foreach ($resultado as $item) {
			
			if($resultado!=$dusuario){
			echo'<option value="'.$item['id_usuario'].'">'.$item['estado_usuario'].'</option>';
			}
		}
	}
		public function cargaridEmpleado2(){
		$resultado=$this->usuario->getempl();
		foreach ($resultado as $item) {
			
			if($resultado!=$dusuario)
			{
				echo'<option value="'.$item['id_empleados'].'">'.$item['nombre_empleado'].'</option>';
			}
			
		}
	}
	public function eliminar()
	{
		$eliminar=$_GET['id'];
		$this->usuario->usuario($usuario);
		$this->index();
	}
		
}
?>