<?php
	define('BASEPATH') OR exit('No direct script access allowed');

	class Datos_e extends CI_Controller{

		public function index()
		{
			$this->load->helper('url');
			$this->load->view('datos_empleados_view');
		}

		public function registroempleados()
		{
			//Recuperamos datos del formulario
			
		}
	}

?>