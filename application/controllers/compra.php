 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->model('Local_model', 'LM', true);
		$data=array(
			'codigo_juego'=>$codigo,
			'nombre_juego'=>$juego,
			'cantidad_juego'=>$cantidad,
			'fecha_compra'=>$fecha,
			'precio_unitario_compra'=>$precio,
			'total_compra'=>$total
		);

		//Utilizamos metodo del modelo//
		$resultado=$this->LM->realizarCompra($data);
		if ($resultado==1) {
            $this->load->view('mensaje');
		}
		else
		{
			$this->index();
		}

		//$this->load->view('mensaje');
	}
}
