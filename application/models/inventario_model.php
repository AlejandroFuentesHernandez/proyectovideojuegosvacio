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

public function getDetalle(){
        $this->db->select('i.id_inventario, i.cantidad_existente, i.stock_minimo, i.precio_venta, i.fecha_ingreso, i.estado_inventario, c.nombre_juego');
        $this->db->from('tab_inventario i');
        $this->db->join('tab_inv_compra ic','ic.id_inventario=i.id_inventario');
        $this->db->join('tab_compra c','c.id_compra=ic.id_compra'); //esto es igual a SELECT i.cantidad_existente, i.stock_minimo, i.precio_venta, i.fecha_ingreso, i.estado_inventario, c.nombre_juego FROM tab_inventario i JOIN tab_inv_compra iv ON iv.id_inventario= i.id_inventario JOIN tab_compra c ON c. id_compra=iv.id_compra
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
    
    public function mostrarById($id)
    {
        $this->db->where('id_inventario='.$id);
        $inventario=$this->db->get('tab_inventario'); 
        return $inventario->result_array();
    }
/*$this->db->WHERE('id_compra', $id);
        $result=$this->db->get('tab_compra');
        return $result->row()->precio_unitario_compra;
    }*/
       public function modificar($data)
    {
    	
    	$this->db->set('cantidad_existente', $data['existencia']);
    	$this->db->set('stock_minimo', $data['stock']);
    	$this->db->set('precio_venta', $data['precio']);
    	$this->db->set('fecha_ingreso', $data['fecha']);
    	$this->db->set('estado_inventario', $data['estado']);
        $this->db->where('id_inventario', $data['id']);
    	$this->db->update('tab_inventario');  
	}

}
