<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model
{
	public function getJuego()
    {
        $resultado=$this->db->get('tab_compra');
        return $resultado->result_array();
    }

    public function getCliente()
    {
        $resultado=$this->db->get('tab_cliente');
        return $resultado->result_array();
    }

     public function insertar($numero_factura, $estado_factura,$fecha_venta,$tipo_pago,$cantidad_producto, $total_factura, $observaciones_factura, $id_cliente)
    {
        $resultado=$this->db->query("INSERT INTO ventas (numero_factura, estado_factura, fecha_venta, tipo_pago,total_factura, cantidad_producto, observaciones_factura, id_cliente) VALUES(".$numero_factura.",'".$estado_factura."', '".$fecha_venta."','".$tipo_pago."',".$total_factura.", ".$cantidad_producto.",'".$observaciones_factura."', ".$id_cliente.")");
          

        if($resultado==true)
        {
            return 1;
        }
        else
        {
            return 0;
        }

    }


}
