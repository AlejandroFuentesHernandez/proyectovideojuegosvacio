<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 Controlador para hacer el CRUD de los proveedores
 */
class Inventario extends CI_Controller
{
    
    public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('inventario_model','inventario',TRUE); 
    }

    public function index()
    { 
        $inventario=$this->inventario->mostrar();
        $data['inventario']=$invenrtario;
    	$this->load->view('registro_inventario_view',$data);
    }

    public function cargarjuego()
    {
        $resultado=$this->inventario->getJuego();
        foreach($resultado as $item){
            echo '<option value="'.$item['id_compra'].'">'.$item['nombre_juego'].'</option>';
        }
    }

      public function cargar_existencia()
    {   
        $id_juego=$this->input->post('id');
        echo $this->inventario->getExistencia($id_juego);       
    }

     public function cargartienda()
    {
        $resultado=$this->inventario->getTienda();
        foreach($resultado as $item){
            echo '<option value="'.$item['id_tienda'].'">'.$item['nombre_tienda'].'</option>';
        }
    }

      public function cargar_precio()
    {   
        $id_precio=$this->input->post('id');
        echo $this->inventario->getPrecio($id_precio);       
    }

    public function Registrar_inventario()
    {  

         $id_compra=$this->input->post('nombre_juego');
         $cantidad_existente=$this->input->post('cantidad_existente');
         $stock_minimo=$this->input->post('stock_minimo');
         $precio_venta=$this->input->post('precio_venta');
         $fecha_ingreso=$this->input->post('fecha_ingreso'); 
         $estado_inventario=$this->input->post('estado_inventario');
         $id_tienda=$this->input->post('tienda');  
               

       /* $data=array
		(	

			'cantidad_existente'=>$cantidad_existente,
            'stock_minimo'=>$stock_minimo,
            'precio_venta'=>$precio_venta,
            'estado_inventario'=>$estado_inventario,
            'fecha_ingreso'=>$fecha_ingreso,
            'id_tienda'=>$id_tienda,		
		); */

		$registro=$this->inventario->insertar($id_compra, $cantidad_existente,$stock_minimo,$precio_venta,$fecha_ingreso, $estado_inventario, $id_tienda); 
                          
            if($registro==1){
                 echo 1;
            }
            else{
                 echo 0; 
            }
    }

   /* public function eliminar()
        {
            
        $eliminar = $_GET['idp'];
        $this->proveedores->eliminar($eliminar);
        $this->index();

        }

    public function mostrarId()
    {        
        $data['editarprov']=$this->proveedores->mostrarById($this->input->get('idp'));
        $this->load->view('editar_proveedores_view', $data);
    }


    public function modificar()
        {

            $data ['id'] = $_POST['id_proveedores'];
            $data ['nombre'] = $_POST['nombre_empresa'];
            $data ['tipo'] = $_POST['tipo_persona'];
            $data ['representante'] = $_POST['representante_empresa'];
            $data ['direccion'] = $_POST['direccion_proveedores'];
            $data ['correo'] = $_POST['correo_proveedores'];
            $data ['contacto'] = $_POST['contacto_proveedores'];
            $data ['estado'] = $_POST['estado_provedores'];
            $this->proveedores->modificar($data);
            $this->index();

        }

       /*public function mostrar_proveedores() esta funcion ya se realizo arriba
        {
        	$proveedores= $this->proveedores->mostrar(); 
        	$data['dproveedores']=$proveedores; 
        	$this->load->view('mostrarproveedores_view', $data); 

        }*/
}

