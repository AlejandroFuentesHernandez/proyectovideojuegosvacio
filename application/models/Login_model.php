<?php  

function __construct()

{

$this->load->database();

}

class Login_model extends CI_Model{

public function verificarUsuario($user,$pass)
{
     // $x=$this->dbSELECT * FROM usuario where user="'.$user.'"and password="'.$pass.'"
      $this->db->where('nombre="'.$user.'" and
       password="'.$pass.'"');
    $x=$this->db->get('usuario'); //el nombre de nuestra tabla que queremos consultar
    if ($x->result_array()) 
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