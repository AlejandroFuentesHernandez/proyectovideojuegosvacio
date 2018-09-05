<?php
define('BASEPATH') OR 	exit('No direct script access allowed');

/**
 * 
 */
function __construct()
{
	$this->load->database();
}


class Ingresar_empleadousua_model extends CI_Model
{
	//los modelos no necesitan un constructor

	public function insertar($data){
		$resultado=$this->db->insert('tab_empleados',$data);
		if($resultado==true)
		{
			return 1;
		}else
		{
			return 0;
		}
	}
	public function mostrar(){
		$empleados=$this->bd->get('tab_empleados');
		return $empleados->result();
	}
}

?>