<?php  

function __construct()

{

$this->load->database();

}

class Usuario_model extends CI_Model{

public function nuevoUsuario($data)
{

   
    $y=$this->db->insert('tab_usuario', $data); 
     if ($y==true) 
    {
      return 1;
    }
    else
    {
        return 0;
    }
}

}


?>