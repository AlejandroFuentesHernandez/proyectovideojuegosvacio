<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
public function error()
{
	$this->load->helper('url'); 
	$this->load->view('error');
}
public function index()
	{
		$this->load->helper('url'); //esto sirve para habilitar las url 
		$this->load->view('formlogin');
	}

	public function iniciosesion()
	{
         $this->load->helper('url');//instanciamos url's dinamicos
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