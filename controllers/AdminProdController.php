<?php
include_once 'controllers/controller.php';
include_once 'views/AdminProdView.php';
include_once 'models/AdminProdModel.php';

class AdminProdController extends Controller  {

  function __construct() {
    $this->model = new AdminProdModel();
    $this->view = new AdminProdView();
    $this->checkSesion();
    $this->checkAdmin();
  }


    function mostrarAdminProd(){
      $categorias = $this->model->getCategorias();
      $this->view->adminProd($categorias);
    }
    function getImagenesVerificadas($imagenes){
       $imagenesVerificadas = [];
       for ($i=0; $i < count($imagenes['size']); $i++) {
         if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
             $imagen_aux = [];
             $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
             $imagen_aux['name']=$imagenes['name'][$i];
             $imagenesVerificadas[]=$imagen_aux;
         }
       }
       return $imagenesVerificadas;
     }
   function guardarProducto(){

     $producto = $_POST['producto'];
     $id_categoria = $_POST['categoria'];
     if(isset($_FILES['imagenes'])){
       $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
       if(count($imagenesVerificadas)>0){
         $this->model->crearProducto($producto,$id_categoria,$imagenesVerificadas);
           }
       }
       $productos = $this->model->getCategorias();
       $this->view->listaAdminProd($productos);
   }

   function borrarProducto(){
     $key = $_GET['id_producto'];
     $this->model->eliminarProducto($key);
     $productos = $this->model->getCategorias();
     $this->view->listaAdminProd($productos);
   }
   function borrarImagen(){
     $key = $_GET['id_imagen'];
     $this->model->eliminarImagen($key);
     $productos = $this->model->getCategorias();
     $this->view->listaAdminProd($productos);
   }
   function updateProd(){

           $id_producto = $_GET['id_producto'];
           $producto = $this->model->getProducto($id_producto);
           $this->view->editProd($producto);

   }

   function actualizarProducto(){
     $producto = $_POST['id_producto'];
     $producto = $_POST['producto'];
     if(isset($_FILES['imagenes'])){
       $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
       if(count($imagenesVerificadas)>0){
         $this->model->editarProducto($producto,$id_producto,$imagenesVerificadas);
           }
       }
   }
}

?>
