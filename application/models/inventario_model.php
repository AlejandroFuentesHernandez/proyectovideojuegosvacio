<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_model extends CI_Model
{
	public function getJuego()
    {
        $resultado=$this->db->get('tab_compra');
        return $resultado->result_array();
    }

    public function getExistencia($id)
    {
        $this->db->WHERE('id_compra', $id);
        $result=$this->db->get('tab_compra');
        return $result->row()->cantidad_juego;
    }

    public function getTienda()
    {
        $resultado=$this->db->get('tab_tienda');
        return $resultado->result_array();
    }

    public function getPrecio($id)
    {
        $this->db->WHERE('id_compra', $id);
        $result=$this->db->get('tab_compra');
        return $result->row()->precio_unitario_compra;
    }

    public function insertar($id_compra, $cantidad_existente,$stock_minimo,$precio_venta,$fecha_ingreso, $estado_inventario,$id_tienda)
    {
        $resultado=$this->db->query("INSERT INTO tab_inventario (cantidad_existente, stock_minimo,precio_venta,fecha_ingreso, estado_inventario, id_tienda) VALUES(".$cantidad_existente.", ".$stock_minimo.", ".$precio_venta.",'".$fecha_ingreso."','".$estado_inventario."', ".$id_tienda.")");

         $id_inventario=$this->db->insert_id();

        $this->db->query("INSERT INTO tab_inv_compra(id_inventario, id_compra) VALUES(".$id_inventario.", ".$id_compra.")");
           

        if($resultado==true)
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
        $inventario=$this->db->get('tab_inventario'); 
        return $inventario->result();

    }



/*	public function eliminar($eliminar)
    {
        $proveedores=$this->db->query('DELETE FROM tab_proveedores WHERE id_proveedores='.$eliminar); 
    }

    public function mostrarById($id)
    {
        $this->db->where('id_proveedores='.$id);
        $proveedores=$this->db->get('tab_proveedores'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $proveedores->result_array();
    }

       public function modificar($data)
    {
    	$this->db->set('nombre_empresa', $data['nombre']);
    	$this->db->set('tipo_persona', $data['tipo']);
    	$this->db->set('representante_empresa', $data['representante']);
    	$this->db->set('direccion_proveedores', $data['direccion']);
    	$this->db->set('correo_proveedores', $data['correo']);
    	$this->db->set('contacto_proveedores', $data['contacto']);
    	$this->db->set('estado_provedores', $data['estado']);
    	$this->db->where('id_proveedores', $data['id']);
    	$this->db->update('tab_proveedores');  
	}*/

}
