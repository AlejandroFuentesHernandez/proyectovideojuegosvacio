<?php
define('BASEPATH') OR exit('No direct script access allowed');

//la clase inicia con mayuscula

function __construct()
{
	$this->load->database();
}

class Tienda_model extends CI_Model
{
	//los modelo no necesitan un constructor

public function insertar($data)
{
	$x=$this->db->insert('tab_tienda',$data);
	// que es lo mismo que: Insert INSERT INTO tab_empleados()values()

	if($x==true)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
public function mostrar()
{
	$tienda=$this->db->get('tab_tienda');
	//que es lo mismo que: SELECT * FROM tab_tienda
	return $tienda->resul();
}
public function eliminar($data)
{
	$tienda=$this->db->query('delete from tab_tienda where id_tienda'.$data);
}
}


?>