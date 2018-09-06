<?php
define('BASEPATH') OR exit('No direct script access allowed');
// controlador de datos empleados
Datos_empleados_controller/registrar_empleado
class Datos_empleados_controller extends CI_Controller
{
		public function  __construt()
{
		parent::construt();//constructor padre
		$this->load->model('datos_empleado_model','empleados_model',TRUE);/*Forma de como cargar el modelo para poder acceder a sus metodos, en el primer parametro se pone el nombre del modelo, en el segundo se asignando un nombre diferente al modelo y en el tercero se le pondra True para que se conecte automaticamente a la base de datos*/
}
public function index(){
	//$this->load cargar un archivo
	$empleados=$this->empleados_model->mostrar();
	//$data['insertar']="";
	$data['dempleados']=$empleados;//enviamos la variable vacia, para que cuando le mandemos parametros no me de el error de variable indefinida
	$this->load->view('datos_empleado_view',$data);
}
public function registrar_empleado()
{
	//obteniendo datos del formulario, los cuales los almacenaremos en una variable

	//$id_empleados=$this->input->post('id_empleados');
	$numero_empleado=$this->input->post('numero_emmpleado');
	$nombre_empleado=$this->input->post('nombre_empleado');
	$DUI_empleado=$this->input->post('DUI_empleado');
	$direccion_empleados=$this->input->post('direccion_empleado');
	$fecha_nacimiento=$this->input->post('fecha_nacimiento');
	$cargo_empleado=$this->input->post('cargo_empleado');
	$id_tienda=$this->input->post('id_tienda');
	$estado_empleado=$this->input->post('estado_empleado');

	/*
		mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Empleados de la base de datos, esto quiere decir que lo que esta al lado izquierdo seria dicha columna y tendran el valor correspondiente de la informacion que se mande al formulario
	*/
	$data=array
	(
		//'id_empleado'=>$id_empleado,
		'numero_empleado'=>$numero_empleado,
		'nombre_empleado'=>$nombre_empresa,
		'DUI_empleado'=>$DUI_empleado,
		'direccion_empleados'=>$direccion_empleados,
		'fecha_nacimiento'=>$fecha_nacimiento,
		'cargo_empleado'=>$cargo_empleado,
		'id_tienda'=>$id_tienda,
		'estado_empleado'=>$estado_empleado,
	);

	//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array.
	$registro=$this->empleados_model->insertar($data);
	$mensaje['insertar']='Registro exitoso';
	if($registro==1){
		$ruta=base_url('datos_empleados_controller');

		echo "<script> alert('Empleado guardado satisfactoriamente.');
				window.location='{$ruta}';
				</script>";
		$this->load->view('datos_empleado_view',$mensaje);

	}
	else{
		$this->error();
	}
}

public function mostrar_empleados()
{
	$empleados=$this->empleados->mostrar();
	$data['dempleados']=$empleados;
	$this->load->view('mostrar_empleados_view',$data);
}
}




/*
		public function error()
		{
			$this->load->helper('url');
			$this->load->view('error');
		}


	public function inicio_empleados()
	{
	//mostrar datos en una vista
		 $this->load->helper('url');//index
		 $this->load->view('datos_empleado_view');//index
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
	//funcion eliminar de la base de datos cambiar a datos estado desabilitado
	/*public function eliminar_empleado()
		{
			//buscar el numero de empleado y cambiar el estado del empleado para dehabilitado
			$numero_empleado = $_POST['numero_empleado'];
			$this->datos_empleado_model->deshabilitar_empleados($numero_empleado);
			//$this-> inicio_empleados();

		}*/

?>