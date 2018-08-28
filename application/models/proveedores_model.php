<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores_model extends CI_Model
{
	public function insertar($data){

	$resultado=$this->db->insert('tab_proveedores', $data); 
		if($resultado==true)
		{
			return 1;
		}
		else
		{
			return 0;
		}

	}
}
