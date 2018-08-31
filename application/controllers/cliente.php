<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('clientes_view');
	}
        
        public function RegistroCliente()
	{
		$this->load->helper('url'); //Instaciamos url's dinamicos//

		//Recuperamos datos del formulario//
		$nombre =$this->input->post('nombre_cliente');
		$dui = $this->input->post('numero_DUI');
		$nit = $this->input->post('numero_NIT');
		$telefono = $this->input->post('telefono_cliente');
		//---------------------------------------------

        //Llamamos al modelo//
		$this->load->model('Cliente_model', 'CM', true);
		$data=array(
			'nombre_cliente'=>$nombre,
			'numero_DUI'=>$dui,
			'numero_NIT'=>$nit,
			'telefono_cliente'=>$telefono
		);
		
		//Utilizamos metodo del modelo//
		$resultado=$this->CM->insertarCliente($data);
		if ($resultado==1) {
            $this->load->view('mensaje_cliente');
		}
		else
		{
			$this->clientes_view();
		}

		//$this->load->view('mensaje');
	}
}