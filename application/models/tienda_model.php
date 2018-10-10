<?php
function __construct()
{
	//parent:: __construct();
	$this->load->database();
}
//creamos la insercion de datos a una tabla
class Tienda_model extends CI_Model
{//Inicio de insercion

	public function insertar($data)
    {
        //Se inserta los datos//
        $x=$this->db->insert('tab_tienda', $data);
         if($x==true)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }//Fin de insersion de datos//

    //Inicio de muestra de datos//
	public function mostrar()
    {
        $tienda=$this->db->get('tab_tienda'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $tienda->result();
    }//Fin de muestra de datos//

    public function mostrarById($id)
    {
    	$this->db->where('id_tienda',$id);
    	$tienda=$this->db->get('tab_tienda');//que es lo mismo que: Select * FRom Tab_proveedores
    	return $tienda->result();
    }
    //Inicio de eliminacion de datos//
    public function eliminar($data)
    {
    	$tienda=$this->db->query('delete from tab_tienda where id_compra='.$data);
    }//fin de la eliminacion de datos//

    //Inicia modificacion de datos//
    public function modificar($data)
    {
    	$this->db->set('nombre_tienda',$data['nombre_tienda']);
    	$this->db->set('direccion_tienda',$data['direccion_tienda']);
    	$this->db->set('telefono_tienda',$data['telefono_tienda']);
        $this->db->where('id_tienda',$data['id']);
        $this->db->update('tab_tienda');
    }

    public function update($data)
    {
        $this->db->set('id_tienda',$data['id']);
        $this->db->set('nombre_tienda',$data['nombre_tienda']);
        $this->db->set('direccion_tienda',$data['direccion_tienda']);
        $this->db->set('telefono_tienda',$data['telefono_tienda']);
        $this->db->where('id_tienda',$data['id']);
        $this->db->update('tab_tienda');
    }
    public function getmostrar($id)
    {
        $this->db->where('id_tienda',$id);
        $tienda=$this->db->get('tab_tienda');
        return $tienda->result_array();
    }
	}





/*public function insertar($data)
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

------------------------------------------------------------------------------
public function nuevaTienda($nombre_tienda,$direccion_tienda,$telefono_tienda)
	{
		$this->load->database();
		$this->db->trans_begin();//Inicio de transaccion//

		$this->db->query("INSERT INTO tab_tienda(nombre_tienda,direccion_tienda,telefono_tienda) VALUES(".$nombre_tienda.",".$direccion_tienda.",".$telefono_tienda.")");

		if($this->db->trans_status()===false)
		{
			$this->db->trans_rollback();//no se guarda nada en la base, todo volvera desde cero como si no se hubiera hecho nada
			return 0;
		}else
		{
			$this->db->trans-commit();//Guarda datos en la base 
			return 1;
		}//fin de Insercion de datos



*/





?>