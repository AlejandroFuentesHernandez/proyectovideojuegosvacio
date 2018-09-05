<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('index');
	}
        
        public function InicioCompra()
	{
		$this->load->helper('url'); //Instaciamos url's dinamicos//

		//Recuperamos datos del formulario//
		$newjuego =$this->input->POST('juego');
		$newcodigo = $this->input->post('codigo');
		$newtotal = $this->input->post('total');
		$newcantidad = $this->input->post('cantidad');
		$newfecha = $this->input->post('fecha_compra');
		$newprecio = $this->input->post('precio');
		//---------------------------------------------

        //Llamamos al modelo//
		$this->load->model('Local_model', 'LM', true);
		$data=array(
			'juego'=>$newjuego,
			'codigo'=>$newcodigo,
			'total'=>$newtotal,
			'cantidad'=>$newcantidad,
			'fecha_compra'=>$newfecha,
			'precio'=>$newprecio,
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