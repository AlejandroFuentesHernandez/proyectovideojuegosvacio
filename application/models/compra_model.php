<?php
function __construct()
{
    //parent:: __construct();
    $this->load->database();
}
//Creamos la insercion de datos a una tabla
class Compra_model extends CI_Model{ //Inicio de Insercion
    
    public function insertar($data)
    {
        //Se inserta los datos//
        $x=$this->db->insert('tab_compra', $data);
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
        $compra=$this->db->get('tab_compra'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $compra->result();
    }//Fin de muestra de datos//
     
    public function mostrarById($id)
    {
        $this->db->where('id_compra='.$id);
        $compra=$this->db->get('tab_compra'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $compra->result_array();
    }

    //Inicio de eliminacion de datos// 
    public function eliminar($data)
    {
        $compra=$this->db->query('delete from tab_compra where id_compra
            ='.$data); 
    }//Fin de eliminacion de datos//
   
   //Inicia modificacion de datos//
    public function modificar($data){
    $this->db->set('codigo_juego', $data['codigo']);
    $this->db->set('nombre_juego', $data['juego']);
    $this->db->set('cantidad_juego', $data['cantidad']);
    $this->db->set('fecha_compra', $data['fecha']);
    $this->db->set('precio_unitario_compra', $data['precio']);
    $this->db->set('total_compra', $data['total']);
    $this->db->where('id_compra', $data['id']);
    $this->db->update('tab_compra');  
}//Fin modificacionde datos//


}


/*function __construct()
{
    //parent:: __construct();
    $this->load->database();
}
//Creamos la insercion de datos a una tabla
class Compra_model extends CI_Model{ //Inicio de Insercion
    
    public function realizarCompra($data)
    {
        //Se inserta los datos//
    	$x=$this->db->insert('tab_compra', $data);
         if($x==true)
    	{
    		return 1;
    	}
    	else
    	{
    		return 0;
    	}

    }
}//Fin de consulta*/
