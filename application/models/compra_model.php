<?php
function __construct()
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
}//Fin de consulta
?>