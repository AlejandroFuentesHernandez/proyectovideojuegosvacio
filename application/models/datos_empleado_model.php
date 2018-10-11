<?php
function __construct()
{
	//parent:: __construct();
	$this->load->database();
}

//creamos la insercion de datos a una tabla
class Datos_empleado_model extends CI_Model
{
	public function getTienda()//insertar id
        {
            $this->load->database();
            $resultado=$this->db->get('tab_tienda');
            return $resultado->result_array();
        }//Fin de llamado de cliente//

        public function getTienda2()//insertar id
        {
            $this->load->database();
            $resultado=$this->db->get('tab_tienda');
            return $resultado->result_array();
        }//Fin de llamado de cliente//

//Inicio de insercion
	public function insertar($data)
	{
		//se inserta datos//
	$x=$this->db->insert('tab_datos_empleados',$data);/* que es lo mismo que: INSERT INTO tab_empleados()values()*/
	if($x==true)
	{
		return 1;
	}else
	{
		return 0;
	}
}

public function mostrar(){
$empleado=$this->db->get('tab_datos_empleados');//que es lo mismo que: SELECT * FROM tab_empleados
return $empleado->result();
}
public function mostrarById($id)
{
	$this->db->where('id_empleados',$id);
	$empleado=$this->db->get('tab_datos_empleados');
	return $empleado->result_array();
}


public function buscarcampos($id)
{
	//$this->db->select('id_empleados',$data);$this->db->from('tab_datos_empleados');

	$this->db->where('id_empleados',$id);
	$empleado=$this->db->get('tab_datos_empleados');
	return $empleado->result_array();

}
	
public function eliminar($data)
{
	$empleado=$this->db->query('delete from tab_usuario where id_usuario'.$data);
}


public function modificar($data)
{
	
	$this->db->set('numero_empleado',$data['numero_empleado']);
	$this->db->set('nombre_empleado',$data['nombre_empleado']);
	$this->db->set('DUI_empleado',$data['DUI_empleado']);
	$this->db->set('direccion_empleado',$data['direccion_empleado']);
	$this->db->set('fecha_nacimiento',$data['fecha_nacimiento']);
	$this->db->set('cargo_empleado',$data['cargo_empleado']);
	$this->db->set('correo_empleado',$data['correo_empleado']);
	$this->db->set('telefono_empleado',$data['telefono_empleado']);
	$this->db->set('estado_empleado',$data['estado_empleado']);
	$this->db->where('id_tienda',$data['id_tienda']);
	$this->db->update('tab_empleados');

}

public function update($data)
{
	$this->db->set('id_empleados',$data['id']);
	$this->db->set('numero_empleado',$data['numero_empleado']);
	$this->db->set('nombre_empleado',$data['nombre_empleado']);
	$this->db->set('DUI_empleado',$data['DUI_empleado']);
	$this->db->set('direccion_empleado',$data['direccion_empleado']);
	$this->db->set('fecha_nacimiento',$data['fecha_nacimiento']);
	$this->db->set('cargo_empleado',$data['cargo_empleado']);
	$this->db->set('correo_empleado',$data['correo_empleado']);
	$this->db->set('telefono_empleado',$data['telefono_empleado']);
	$this->db->set('estado_empleado',$data['estado_empleado']);
	$this->db->set('id_tienda',$data['id_tienda']);
	$this->db->where('id_empleados',$data['id']);
	$this->db->update('tab_datos_empleados');
}
public function getmostrar($id)
	{
	$this->db->where('id_empleados',$id);
	$empleado=$this->db->get('tab_datos_empleados');
	return $empleado->result_array();
	}

}

?>