<?php
function __construct()
{
    //parent:: __construct();
    $this->load->database();
}
//Creamos la insercion de datos a una tabla
class Cliente_model extends CI_Model{ //Inicio de Insercion
    
    public function insertar($data)
    {
        //Se inserta los datos//
    	$x=$this->db->insert('tab_cliente', $data);
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
        $clientes=$this->db->get('tab_cliente'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $clientes->result();
    }//Fin de muestra de datos//
     

    //Inicio de eliminacion de datos// 
    public function eliminar($data)
    {
        $proveedores=$this->db->query('delete from tab_proveedores where id_proveedores='.$data["id_proveedores"]); 
    }//Fin de eliminacion de datos//


}
?>