<?php
function __construct()
{
	//parent:: __construct();
	$this->load->database();
}
/**
 Controlador para hacer el CRUD de Usuarios
 */
class Datos_usuario_model extends CI_Model
{

	public function getIdEmpleado()//insertar id
        {
            $resultado=$this->db->get('tab_datos_empleados');
            return $resultado->result_array();
        }
        public function getestado()//insertar id
        {
            $resultado=$this->db->get('tab_usuario');
            return $resultado->result_array();
        }
        public function getempl()//insertar id
        {
            $resultado=$this->db->get('tab_datos_empleados');
            return $resultado->result_array();
        }

	//Inicio de insercion
	public function insertar($data)
	{
		
		$x=$this->db->insert('tab_usuario',$data);
		if ($x==true) {
			return 1;
		}
		else
		{
			return 0;
		}
	}

		public function mostrar()
	{
		$usuarios=$this->db->get('tab_usuario');
		return $usuarios->result();
	}
		public function mostrarById($id)
		{
			$this->db->where('id_usuario',$id);
			$usuario=$this->get('tab_usuario');
			return $usuario->result();
		}
	 
		public function eliminar($data)
	{
		$usuario=$this->db->query('delete from tab_usuario where id_usuario'.$data);
	}
	public function buscarcampos($id)
	{
		$this->db->where('id_usuario',$id);
		$usuario=$this->db->get('tab_usuario');
		return $usuario->result();
	}

		public function modificar($data)
		{
			$this->db->set('nombre_usuario',$data['nombre_usuario']);
			//$this->db->set('contraseña_usuario',$data['contraseña_usuario']);
			$this->db->set('rol_usuario',$data['rol_usuario']);
			$this->db->set('estado_usuario',$data['estado_usuario']);
			$this->db->set('id_empleado',$data['id_empleado']);
			$this->db->where('id_usuario',$data['id']);
			$this->db->update('tab_usuario');
		}
		public function update($data)
		{
			$this->db->set('nombre_usuario',$data['nombre_usuario']);
			//$this->db->set('contraseña_usuario',$data['contraseña_usuario']);
			$this->db->set('rol_usuario',$data['rol_usuario']);
			$this->db->set('estado_usuario',$data['estado_usuario']);
			$this->db->set('id_empleado',$data['id_empleado']);
			$this->db->where('id_usuario',$data['id']);
			$this->db->update('tab_usuario');

			if($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		public function getmostrar($id)
		{
			$this->db->where('id_usuario',$id);
			$usuario=$this->db->get('tab_usuario');
			return $usuario->result_array();
		}
}


	//los modelos no necesitan un constructor
	/*public function getdatausuario()
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
		$this->db->set('id_empleados',$data['id_empleados']);
		$this->db->set('estado_usuario',$data['estado_usuario']);
		$this->db->insert('tab_usuario');
	}
	public function deshabilitar_usuarios($id_empleados,$estado_usuario)
	{
		$this->db->set('estado_usuario',$data['estado_usuario']);
		$this->db->where('id_empleados',$id_empleados);
		$this->db->update('tab_usuario');
	}
//no se usa porque borra toda la linea y se pierde informacion
	/*public function eliminar()
	{
		$this->db->where('id_usuario',$id_usuario);
		//$this->db->delete('tab_datos_empleados');
	}
	public function obtener_usuario($id_empleados)
	{
		//obtener usuarios en base numero empleado
		$this->db->select('id_empleados','nombre_usuario','contraseña_usuario','rol_usuario','estado_usuario',);
		$this->db->from('tab_usuario');
		//iria id?
		$this->db->where('id_empleados'.$id_empleados);
		return $tab_usuario->row();

	}
	public function update($data)
	{
	//update
	$this->db->set('nombre_usuario',$data['nombre_usuario']);
	$this->db->set('contraseña_usuario',$data['contraseña_usuario']);
	$this->db->set('rol_usuario',$data['rol_usuario']);
	$this->db->set('id_empleados',$data['id_empleados']);
	$this->db->set('estado_usuario',$data['estado_usuario']);

	$this->db->where('id_usuario'),$data['id_usuario'];
	$this->db->update('tab_usuario');

	}*/

?>

