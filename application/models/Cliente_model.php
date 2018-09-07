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
     
    public function mostrarById($id)
    {
        $this->db->where('id_cliente='.$id);
        $clientes=$this->db->get('tab_cliente'); //que es lo mismo que:  SELECT * FROM tab_proveedores
        return $clientes->result_array();
    }

    //Inicio de eliminacion de datos// 
    public function eliminar($data)
    {
        $cliente=$this->db->query('delete from tab_cliente where id_cliente
            ='.$data); 
    }//Fin de eliminacion de datos//

    public function modificar($data){
    $this->db->set('nombre_cliente', $data['nombre']);
    $this->db->set('fecha_nacimiento_cliente', $data['nacimiento']);
    $this->db->set('edad_cliente', $data['edad']);
    $this->db->set('numero_DUI', $data['dui']);
    $this->db->set('numero_NIT', $data['dui']);
    $this->db->set('estado_cliente', $data['estado']);
    $this->db->set('telefono_cliente', $data['telefono']);
    $this->db->where('id_cliente', $data['id']);
    $this->db->update('tab_cliente');  
}


}
?>