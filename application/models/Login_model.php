<?php  

function __construct()

{

$this->load->database();

}

class Login_model extends CI_Model{

public function verificarUsuario($user,$pass)
{
     // $x=$this->dbSELECT * FROM usuario where user="'.$user.'"and password="'.$pass.'"
      $this->db->where('nombre_usuario="'.$user.'" and
       contraseña_usuario="'.$pass.'"');
    $x=$this->db->get('tab_usuario'); //el nombre de nuestra tabla que queremos consultar
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