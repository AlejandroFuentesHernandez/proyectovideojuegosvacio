<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
//la clase inicia con mayuscula 

 */
class Datos_empleado_model extends CI_Model
{
	//los modelo no necesitan un constructor
	public function getdataempleados()
	{
		//nombre de la tabla
		$usuario = $this->db->get('tab_datos_empleados');
		return $usuario->result();
	}
	public function insertar_empleados($data)
	{
		//insertar datos
		$this->db->set('numero_empleado',$data['numero_empleado']);
		$this->db->set('nombre_empleado',$data['nombre_empleado']);
		$this->db->set('DUI_empleado',$data['DUI_empleado']);
		$this->db->set('direccion_empleado',$data['direccion_empleado']);
		$this->db->set('fecha_nacimiento',$data['fecha_nacimiento']);
		$this->db->set('cargo_empleado',$data['cargo_empleado']);
		$this->db->set('id_tienda',$data['id_tienda']);
		$this->db->set('estado_empleado',$data['estado_empleado']);
		$this->db->insert('tab_datos_empleados');


	}
	public function deshabilitar_empleados($numero_empleado,$estado_usuario)
	{
		//eliminar empleados es deshabilitar
		$this->db->set('estado_empleado',$data['estado_empleado']);
		$this->db->where('numero_empleado',$numero_empleado);
		$this->db->update('tab_datos_empleados');


	}
	//no se usa porque borra toda la linea y se pierde informacion
	/*public function eliminar()
	{
		$this->db->where('numero_empleado',$numero_empleado);
		//$this->db->delete('tab_datos_empleados');
	}*/

	public function obtener_empleados($numero_empleado)
	{
		//obtener usuarios en base numero empleado
		$this->db->select('numero_empleado','nombre_empleado','DUI_empleado','direccion_empleado','fecha_nacimiento','cargo_empleado','estado_empleado');
		$this->db->from('tab_datos_empleados');
		//iria id?
		$this->db->where('$numero_empleado'.$numero_empleado);
		//$tab_datos_empleados=$this->db->get();
		return $tab_datos_empleados->row();

	}
	public function update($data)
	{
		//update
		$this->db->set('numero_empleado',$data['numero_empleado']);
		$this->db->set('nombre_empleado',$data['nombre_empleado']);
		$this->db->set('DUI_empleado',$data['DUI_empleado']);
		$this->db->set('direccion_empleado',$data['direccion_empleado']);
		$this->db->set('fecha_nacimiento',$data['fecha_nacimiento']);
		$this->db->set('cargo_empleado',$data['cargo_empleado']);

		$this->db->where('id_empleado'),$data['id_empleado'];
		$this->db->update('tab_datos_empleados');

	}
}
?>