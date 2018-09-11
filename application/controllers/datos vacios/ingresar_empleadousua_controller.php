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
		$this->load->model('ingresar_empleadousua_model','empleadousua_model',TRUE);
	}

	public function inicio_datosempleado()
	{
		//mostrar datos en una vista
		 $usuarios = $this->empleadousua_model->mostrar();
		$data['dempleado']=$empleados;
		$this->load->view('_datos_empleadousua',$data);
	}

	public function registrar_empleado()
	{

		$numero_empleado=$this->input->post('nombre_empresa');
		$nombre_empleado=$this->input->post('nombre_empleado');
		$DUI_empleado=$this->input->post('DUI_empleado');
		$direccion_empleados=$this->post('direccion_empleados');
		$fecha_nacimiento=$this->post('fecha_nacimiento');
		$cargo_empleado=$this->post('cargo_empleado');
		$id_tienda=$this->post('id_tienda');
		$estado_usuario=$this->post('estado_usuario');
	//ingresar datos del post en variables $data
	/*$data['numero_empleado']= $_POST['numero_empleado'];
	$data['nombre_empleado']= $_POST['nombre_empleado'];
	$data['DUI_empleado']= $_POST['DUI_empleado'];
	$data['direccion_empleados']= $_POST['direccion_empleados'];
	$data['fecha_nacimiento']= $_POST['fecha_nacimiento'];
	$data['cargo_empleado']= $_POST['cargo_empleado'];
	$data['id_tienda']= $_POST['id_tienda'];
	$data['estado_empleado']= $_POST['estado_empleado'];*/


	$data=array
	(
		//'id_empleado' =>$id_empleado , 
		'numero_empleado'=>$numero_empleado,
		'nombre_empleado'=>$nombre_empresa,
		'DUI_empleado'=>$DUI_empleado,
		'direccion_empleados'=>$direccion_empleados,
		'fecha_nacimiento'=>$fecha_nacimiento,
		'cargo_empleado'=>$cargo_empleado,
		'id_tienda'=>$estado_empleado,
	);
	$registro=$this->empleadousua_model->insertar($data);
	$mensaje ['insertar']='Registro exitoso';
	if($registro==1)
	{
		$ruta=base_url('datos_empleadousua_controller');

		echo "<script>
			alert('Empleado guardado satisfactoriamente.');
			window.location='{ruta}';
		</script>";
		$this->load->view('_datos_empleadousua_view',$mensaje);
	}
	else{
		$this->error();
	}

	}
public function mostrar_empleados()
{
	$empleados=$this->empleado->mostrar();
	$data['dempleados']=$empleados;
	$this->load->view('mostrar_empleadousu_view');
}

}//ultima llave

?>