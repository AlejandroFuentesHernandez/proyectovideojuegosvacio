 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

/**
 Controlador para hacer el CRUD de los proveedores
 */
class Compra extends CI_Controller
{
    
    public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('Compra_model', 'compra', TRUE); //Forma de como cargar el modelo para poder acceder a sus metodos, en el primer paramentro se pone el nombre del modelo, en el segundo se le esta asignando un nombre diferente al modelo y en el tercero se le pondra TRUE para que se conecte automaticamente a la base de datos 
    }
    //Mostrar datos ingresados//
    public function index(){

    	//$this->load
    	$compra= $this->compra->mostrar();
    	//$data['insertar']=""; 
    	$data['dcompra']=$compra;  //enviamos la variable vacia, para que cuando le mandemos paramentros no me de el error de variable indefinida
    	$this->load->view('compra_view', $data);
    }

    public function editar()//metodo editar("comoYoQuiero")
    {
    	
    	$data['variable']=$this->compra->mostrarById($this->input->get('id'));
    	$this->load->view('modificar_compras', $data);
    }

      //Insertar registros a base de datos//
        public function RegistroCompra()
        {  //Obteniendo datos del formulario, los cuales los almacenaremos en una variable 

        	//$id_compra=$this->input->post('id_compra');
        	$codigo = $this->input->post('codigo_juego');
			$juego =$this->input->post('nombre_juego');
			$cantidad = $this->input->post('cantidad_juego');
			$fecha = $this->input->post('fecha_compra');
			$precio = $this->input->post('precio_unitario_compra');
			$total = $this->input->post('total_compra');

        	//mandamos los datos por medio de un array al modelo, cada elemento corresponde con una columna en la tabla Proveedores de la Base de datos, esto quiere decir que lo que esta al lado izquierdo serian dichas columnas y tendran el valor correspondiente de la informacion que se mande del formulario.
				$data=array
				(	
					//'id_compra'=>$id_compra,
					'codigo_juego'=>$codigo,
					'nombre_juego'=>$juego,
					'cantidad_juego'=>$cantidad,
					'fecha_compra'=>$fecha,
					'precio_unitario_compra'=>$precio,
					'total_compra'=>$total
				); 

				//mandamos a llamar un metodo de nuestro modelo, donde mandaremos como parametro el array. 
				$adquisicion=$this->compra->insertar($data); 
				$mensaje['insertar']="Registro exitoso"; //NO OLVIDAR BORRAR MENSAJE!!!!! xD 
              
				if($adquisicion==1){
					$ruta=base_url('Compra');

					echo "<script>
							alert('Compra guardada satifactoriamente.');
							window.location= '{$ruta}'; 
							</script>";
					$this->load->view('ccompra_view', $mensaje);
					

				}
				else{
					$this->error();
				}
        }

        public function eliminar()
        {
        	
			$eliminar = $_GET['id'];
			$this->compra->eliminar($eliminar);
			$this->index();

		}


		public function modificar()
		{

			$data ['id'] = $_POST['id_compra'];
			$data ['codigo'] = $_POST['codigo_juego'];
			$data ['juego'] = $_POST['nombre_juego'];
			$data ['cantidad'] = $_POST['cantidad_juego'];
			$data ['fecha'] = $_POST['fecha_compra'];
			$data ['precio'] = $_POST['precio_unitario_compra'];
			$data ['total'] = $_POST['total_compra'];
			$this->Compra_model->modificar($data);
			$this->index();

		}


}
/*defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('compra_view');
	}
        
        public function RegistroCompra()
	{
		$this->load->helper('url'); //Instaciamos url's dinamicos//

		//Recuperamos datos del formulario//
		$codigo = $this->input->post('codigo_juego');
		$juego =$this->input->post('nombre_juego');
		$cantidad = $this->input->post('cantidad_juego');
		$fecha = $this->input->post('fecha_compra');
		$precio = $this->input->post('precio_unitario_compra');
		$total = $this->input->post('total_compra');
		//---------------------------------------------

        //Llamamos al modelo//
		$this->load->model('compra_model', 'CM', true);
		$data=array(
			'codigo_juego'=>$codigo,
			'nombre_juego'=>$juego,
			'cantidad_juego'=>$cantidad,
			'fecha_compra'=>$fecha,
			'precio_unitario_compra'=>$precio,
			'total_compra'=>$total
		);

		//Utilizamos metodo del modelo//
		$resultado=$this->CM->realizarCompra($data);
		if ($resultado==1) {
            $this->load->view('mensaje_compra');
		}
		else
		{
			$this->index();
		}

		//$this->load->view('mensaje');
	}
}*/
