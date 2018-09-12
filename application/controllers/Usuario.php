<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
  
public function crear()
{
   $this->load->helper('url'); 
   $this->load->view('crear');
}

	public function crearsesion()
   {
         $this->load->helper('url');//instanciamos url's dinamicos
         //recuperamos datos del formulario
         $newuser= $this->input->post('newusuario');
         $newpass=md5($this->input->post('newpassword'));
         
         //-----------------------------------------------

         $this->load->model('Usuario_model','UM', true);//llamamos al modelo
         $data=array(
          'nombre_usuario' =>$newuser ,
          'contraseña_usuario' =>$newpass ,
          );
         $ingreso=$this->UM->nuevoUsuario($data);//utilizamos metodo del modelo

      if ($ingreso==1) {
            $this->load->view('crear');

         }
         else
         {
            $this->error();
         }
   }
}