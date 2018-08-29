<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores_model extends CI_Model
{
	public function insertar($data){

	$resultado=$this->db->insert('tab_proveedores', $data); // Que es lo mismo que: INSERT INTO tab_proveedroes (nombre_empresa, tipo_empresa, representante_empresa,contacto_proveedores,estado_provedores ) VALUES ('$nombre_empresa', '$tipo_empresa', '$representante_empresa', '$contacto_proveedores', '$estado_provedores') 
		if($resultado==true)
		{
			return 1;
		}
		else
		{
			return 0;
		}

	}

	public function mostrar(){
		$proveedores=$this->db->get('tab_proveedores'); //que es lo mismo que:  SELECT * FROM tab_proveedores
		return $proveedores->result();

	}
}
