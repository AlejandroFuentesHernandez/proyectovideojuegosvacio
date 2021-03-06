<?php
	//define('BASEPATH') OR exit('No direct script access allowed');
/**
	controlador para hacer el crud de los proveedores
*/
	class Datos_empleado extends CI_Controller{

		public function __construct()
		{
			parent::__construct();//constructor del padre
			$this->load->model('datos_empleado_model','empleado',TRUE);//forma de cargar el modelo para poder acceder a sus metodos, en el primer parametro sepone el nombre del modelo, en el segundo se le esta asignado un nombre diferente al modelo y en el tercero se le pondra TRUE para que se conecte automaticamente a la base de datos
		}

		public function index()
		{
			$this->load->view('urlcompleto');
			$this->load->view('Plantilla/navbar');
			$empleado=$this->empleado->mostrar();
			$data['dempleado']=$empleado;//enviamos la variable vacia,para que cuando le mandemos parametros no me de el error de variable indefinida
			$this->load->view('datos_empleados_view',$data);
			$this->load->view('Plantilla/footer');	
		}

		public function editar()
		{
			$this->load->view('urlcompleto');
			$this->load->view('Plantilla/navbar');
			$data['dempleado']=$this->empleado->getmostrar($this->input->get('id'));
			$this->load->view('modificar_e',$data);
			$this->load->view('Plantilla/footer');
				
		}
		public function RegistroEmpleados()
		{
			
			//obteniendo datos del formulario, los cuales los almacenaremos en una variable
			//$id_empleados=$this->input->post('id_empleados');
			$numero_empleado=$this->input->post('numero_empleado');
			$nombre_empleado=$this->input->post('nombre_empleado');
			$DUI_empleado=$this->input->post('DUI_empleado');
			$direccion_empleado=$this->input->post('direccion_empleado');
			$fecha_nacimiento=$this->input->post('fecha_nacimiento');
			$cargo_empleado=$this->input->post('cargo_empleado');
			$correo_empleado=$this->input->post('correo_empleado');
			$telefono_empleado=$this->input->post('telefono_empleado');
			$estado_empleado=$this->input->post('estado_empleado');
			$id_tienda=$this->input->post('id_tienda');
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
			//$mensaje['insertar']="Registro exitoso";//no olvidar borrar mensaje!!!!!!xd

			if($registro==1){
				$ruta=base_url('Datos_empleado');
				echo "<script> 
				alert('Empleado guardado satisfactoriamente.');
				window.location='{$ruta}';
				</script>";
				$this->load('datos_empleados_view');
					}
			else{
				$this->error();
				}
		
		}
		public function modificar()
		{
			
			$data['id']=$_POST['id_empleados'];
			$data['numero_empleado']=$_POST['numero_empleado'];
			$data['nombre_empleado']=$_POST['nombre_empleado']; 
			$data['DUI_empleado']=$_POST['DUI_empleado'];		
			$data['direccion_empleado']=$_POST['direccion_empleado'];
			$data['fecha_nacimiento']=$_POST['fecha_nacimiento'];
			$data['cargo_empleado']=$_POST['cargo_empleado'];
			$data['correo_empleado']=$_POST['correo_empleado'];
			$data['telefono_empleado']=$_POST['telefono_empleado'];
			$data['estado_empleado']=$_POST['estado_empleado'];
			$data['id_tienda']=$_POST['id_tienda'];
			//$this->empleado->update($data);

			$resultado=$this->empleado->update($data);
			if($resultado)
			{
				$dato['msg']="Exito empleado actalizado";
			}else
			{
				$dato['msg']="Error el empleado no pudo ser actualizado";
			}
			$this->load->view('urlcompleto');
			$this->load->view('notificacion_empleado',$dato);
		}
		public function mostrar()
		{
			$empleado=$this->empleado->mostrar();
			$data['dempleado']=$empleado;

			$this->load->view('urlcompleto');
			$this->load->view('Plantilla/navbar');
			$this->load->view('mostar_empleados_view',$data);
			$this->load->view('Plantilla/footer');
		}

		public function cargaridtienda()
		{
			//$this->load->model('datos_empleado_model','empleado','TRUE');
			$resultado=$this->empleado->getTienda();
			foreach ($resultado as $item) {
				echo '<option value="'.$item['id_tienda'].'">'.$item['nombre_tienda'].'</option>';
			}
		}

		public function cargarNtienda()
		{
			$resultado=$this->empleado->obtenertienda();
			foreach ($resultado as $item) {
				echo $item['nombre_tienda'];
			}
		}

		public function cargarEmpleado(){
		$resultado=$this->empleado->getestado();
		foreach ($resultado as $item) {
			
			if($resultado!=$dusuario){
			echo'<option value="'.$item['id_empleados'].'">'.$item['estado_empleado'].'</option>';
			}
		}
	}
		public function cargaridtienda2()
		{
			//$this->load->model('datos_empleado_model','empleado','TRUE');
			$resultado=$this->empleado->getTienda2();
			foreach ($resultado as $item) {
				echo '<option value="'.$item['$idd->cargo_empleado'].'">'.$item['$idd->nombre_tienda'].'</option>';
			}
		}

		public function eliminar()
		{
			$eliminar=$_GET['id'];
			$this->empleado->empleado($empleado);
			$this->index();
		}
		 public function mostrarId()
   {   
        $id_empleados=$this->input->get('id');
        $data['idd']=$this->empleado->mostrarById($id_empleados);
        //print_r($data);
        $this->load->view('Plantilla/navbar');
       	$this->load->view('urlcompleto');	
       	$this->load->view('modificar_e',$data);
       	
    }
	


}

?>