<?php
function__construct()
{
	//parent::__construct();
	$this->load->database();
}
//creamos la insercion de datos a una tabla
class Empleado_model extends CI_Model{//Inicio de insercion
	public function insertar($data)
	{
		//se insertan los datos
		$x=$this->db->insert('',$data);
		if($x==true)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}//Fin de insersion de datos
	//Inicio de musetra de datos
	public function mostrar('tab_empleado')
	{
		$empleado=$this->db->get('tab_empleado');//que es lo mismo que: SELECT* FROM tab_empleado
		return $empleado->result();
	}//Fin de muestra de datos

	//Inicio de eliminacion de datos
	public function eliminar($data)
	{
		$cliente=$this->db->query('delete from tab_cliente where id_cliente='.$data);
	}//fin de eliminacion de datos
}
?>