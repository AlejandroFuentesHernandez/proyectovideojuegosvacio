<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model
{
	public function getJuego()
    {
        $resultado=$this->db->query("SELECT DISTINCT com.id_compra, com.nombre_juego From tab_compra com JOIN tab_inv_compra inco ON inco.id_compra= com.id_compra");
        return $resultado->result_array();
    }

    public function getCliente(){
        $resultado=$this->db->get('tab_cliente');
        return $resultado->result_array();
    }

   public function getPrecio($id){
    /*$r=$this->db->query("SELECT DISTINCT i.precio_venta FROM tab_inventario i JOIN tab_inv_compra iv ON iv.id_inventario= i.id_inventario JOIN tab_compra c ON c.id_compra=iv.id_compra WHERE c.id_compra=1");*/
        $this->db->distinct('ic.id_inventario');
        $this->db->select('i.precio_venta');
        $this->db->from('tab_inventario i');
        $this->db->join('tab_inv_compra ic','ic.id_inventario=i.id_inventario');
        $this->db->join('tab_compra c','c.id_compra=ic.id_compra');
        $this->db->where('c.id_compra',$id); 
        $query=$this->db->get();
        if($query->num_rows()>0){
           
            return $query->result();
        }else{
            return false;
        } 
    }
    public function insertar($numero_factura, $estado_factura,$fecha_venta,$tipo_pago,$cantidad_producto, $total_factura, $observaciones_factura, $id_cliente)
    {
        $resultado=$this->db->query("INSERT INTO tab_venta (numero_factura, estado_factura, fecha_venta, tipo_pago,total_factura, cantidad_producto, observaciones_factura, id_cliente) VALUES(".$numero_factura.",'".$estado_factura."', '".$fecha_venta."','".$tipo_pago."',".$total_factura.", ".$cantidad_producto.",'".$observaciones_factura."', ".$id_cliente.")");
          

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
    $venta=$this->db->get('tab_venta');
    return $tienda->result();
}

public function update()
{
    $this->db->set('id_tienda',$data['id']);
    $this->db->set('numero_factura',$data['numero_factura']);
    $this->db->set('fecha_factura',$data['fecha_factura']);
    $this->db->set('tipo_pago',$data['tipo_pago']);
    $this->db->set('total_factura',$data['total_factura']);
    $this->db->set('cantidad_producto',$data['cantidad_producto']);
    $this->db->set('observaciones_factura',$data['observaciones_factura']);
    $this->db->set('id_cliente',$data['id_cliente']);
    $resultado=$this->venta->update($data);
    if($resultado)
    {
        $dato['msg']="Exito tienda actualizado";
    }else
    {
        $dato['msg']="Error venta no actualizada";
    }
    $this->load->view('urlcompleto');
    $this->load->view('notificacion_venta',$dato);
}

public function getmostrar($id)
{
    $this->db->where('id_venta',$id);
    $venta=$this->db->get('tab_venta');
    return $venta->result_array();
}

}
