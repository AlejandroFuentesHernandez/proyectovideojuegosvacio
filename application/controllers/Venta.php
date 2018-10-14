<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller
{
  public function __construct()
    {
       parent::__construct();  // Constructor del padre
       $this->load->model('venta_model','venta',TRUE); 
    }

  public function index()
    {  
        $this->load->view('Plantilla/navbar');
        $this->load->view('urlcompleto');
    	$this->load->view('registro_venta_view');
        $this->load->view('Plantilla/footer');
    }
  public function editar()
  {
    $this->load->view('Plantilla/navbar');
    $this->load->view('urlcompleto');
    $this->load->view('Plantilla/footer');
  }

  public function cargarjuego()
    {
        $resultado=$this->venta->getJuego();
         foreach($resultado as $item){
         echo '<option value="'.$item['id_compra'].'">'.$item['nombre_juego'].'</option>';
      }
    }

  public function cargarcliente()
    {
        $resultado=$this->venta->getCliente();
        foreach($resultado as $item){
            echo '<option value="'.$item['id_cliente'].'">'.$item['nombre_cliente'].'</option>';
        }
    }
  
  public function cargar_precio()
    {   
        
        $id=$this->input->post('id');
        $result=$this->venta->getPrecio($id); 
        echo json_encode($result);     
    }
     
  public function Registrar_venta()
    {  
            //capturamos los datos del formulario
         $numero_factura=$this->input->post('numero_factura');
         $estado_factura=$this->input->post('estado_factura');
         $fecha_venta=$this->input->post('fecha_venta');
         $tipo_pago=$this->input->post('tipo_pago');
         $cantidad_producto=$this->input->post('cantidad_producto');
         $total_factura=$this->input->post('total_factura'); 
         $observaciones_factura=$this->input->post('observaciones_factura'); 
         $id_cliente=$this->input->post('id_cliente'); 
         //mandamos los datos del formulario al modelo
        $registro=$this->venta->insertar($numero_factura, $estado_factura,$fecha_venta,$tipo_pago,$cantidad_producto, $total_factura, $observaciones_factura, $id_cliente); 
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
    $venta=$this->venta->mostrar();
    $data['dventa']=$venta;

    $this->load->view('urlcompleto');
    $this->load->view('Plantilla/navbar');
    $this->load->view('mostrar_venta',$data);
    $this->load->view('Plantilla/footer');
}

}

