<?php
function __construct()
{
    //parent:: __construct();
    $this->load->database();
}
//Creamos la insercion de datos a una tabla
class Local_model extends CI_Model{ //Inicio de Insercion
    
    public function realizarCompra($data)
    {
        //Se inserta los datos//
    	$x=$this->db->insert('local', $data);
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