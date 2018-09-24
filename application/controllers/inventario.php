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
        
    	$this->load->view('registro_inventario_view');
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
            //capturamos los datos del formulario
         $id_compra=$this->input->post('nombre_juego');
         $cantidad_existente=$this->input->post('cantidad_existente');
         $stock_minimo=$this->input->post('stock_minimo');
         $precio_venta=$this->input->post('precio_venta');
         $fecha_ingreso=$this->input->post('fecha_ingreso'); 
         $estado_inventario=$this->input->post('estado_inventario');
         $id_tienda=$this->input->post('tienda'); 

         //mandamos los datos del formulario al modelo
  		$registro=$this->inventario->insertar($id_compra, $cantidad_existente,$stock_minimo,$precio_venta,$fecha_ingreso, $estado_inventario, $id_tienda); 
          //Dependiendo si la inserccion a la base de datos fue exitosa mandaremos un uno o un cero               
            if($registro==1){
                 echo 1;
            }
            else{
                 echo 0; 
            }
    }

    public function mostrar()
    {  
        $data['detalle']=$this->inventario->getDetalle();
        $this->load->view('mostrar_inventario',$data);
    }

    public function mostrarId()
    {   
        $id_inventario=$this->input->get('idi');
        $data['idi_inv']=$this->inventario->mostrarById($id_inventario);
       // print_r($data);
       $this->load->view('editar_inventario_view', $data);
    }

    public function modificar()
        {

            $data ['id'] = $_POST['id_inventario'];
            $data ['existencia'] = $_POST['cantidad_existente'];
            $data ['stock'] = $_POST['stock_minimo'];
            $data ['precio'] = $_POST['precio_venta'];
            $data ['fecha'] = $_POST['fecha_ingreso'];
            $data ['estado'] = $_POST['estado_inventario'];
            $data ['tienda'] = $_POST['tienda'];
            $this->inventario->modificar($data);
            $this->mostrar();

        }


    

}

