<?php
define('BASEPATH') OR 	exit('No direct script access allowed');

/**
 * 
 */
class Ingresar_empleadousua_model extends CI_Model
{
	//los modelos no necesitan un constructor
	public function getdatausuario()
	{
		//nombre de la tabla
		$usuario = $this->db->get('tab_usuario');
		return $usuario->result();
	}

	public function insertar_empleados($data)
	{
		//insertar datos
		$this->db->set('nombre_usuario',$data['nombre_usuario']);
		$this->db->set('contraseña_usuario',$data['contraseña_usuario']);
		$this->db->set('rol_usuario',$data['rol_usuario']);
		$this->db->set('id_empleado',$data['id_empleado']);
		$this->db->set('estado_usuario',$data['estado_usuario']);
		$this->db->insert('tab_usuario');
	}
	public function deshabilitar_usuarios($id_empleado,$estado_usuario)
	{
		$this->db->set('estado_usuario',$data['estado_usuario']);
		$this->db->where('id_empleado',$id_empleado);
		$this->db->update('tab_usuario');
	}
	public function obtener_usuario($id_empleado)
	{
		//obtener usuarios en base numero empleado
		$this->db->select('id_empleado','nombre_usuario','contraseña_usuario','rol_usuario','estado_usuario',);
		$this->db->from('tab_usuario');
		//iria id?
		$this->db->where('id_empleado'.$id_empleado);
		return $tab_usuario->row();

	}
	public function update($data)
	{
	//update
	$this->db->set('nombre_usuario',$data['nombre_usuario']);
	$this->db->set('contraseña_usuario',$data['contraseña_usuario']);
	$this->db->set('rol_usuario',$data['rol_usuario']);
	$this->db->set('id_empleado',$data['id_empleado']);
	$this->db->set('estado_usuario',$data['estado_usuario']);

	$this->db->where('id_usuario'),$data['id_usuario'];
	$this->db->update('tab_usuario');

	}
}

?>