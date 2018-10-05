<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
public function error()
{
	$this->load->helper('url'); //NOTA BORRAR LOS HELPER, PORQUE YA SE ESTABLECIERON EN AUTOLOAD
	$this->load->view('error');
}
public function index()
	{
      $this->load->view('Plantilla/nav');
		$this->load->helper('url'); //esto sirve para habilitar las url BORRAR
		$this->load->view('login_view');
      $this->load->view('Plantilla/footer');
	}

	public function iniciosesion()
	{
         $this->load->helper('url');//instanciamos url's dinamicos BORRAR
         //recuperamos datos del formulario
         $user= $this->input->post('usuario');
         $pass=md5($this->input->post('password'));
         //-----------------------------------------------

         $this->load->model('Login_model','LM', true);//llamamos al modelo

         $resultado=$this->LM->verificarUsuario($user, $pass);//utilizamos metodo del modelo

		if ($resultado==1) {
         	$this->load->view('bootstrap');

         }
         else
         {
         	$this->error();
         }
	}
	
}
