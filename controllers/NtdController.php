<?php
//include_once 'controllers/controller.php';
include_once 'views/NtdView.php';
include_once 'models/NtdModel.php';

class NtdController   {
// Función que muestra la nueva sección de la página
// Función que muestra por items la nuueva sección


  function __construct() {
    $this->modelo = new NtdModel();
    $this->vista = new NtdView();

  }

  function mostrarHome(){
    $this->vista->mostrar();
  }
  function verHome(){
    $this->vista->mostrarNTD();
  }
  function verProductos(){
    $categorias = $this->modelo->getCategorias();
    $productos = $this->modelo->getProd();
    $this->vista->Productos($categorias,$productos);
  }
  function verProducto(){
    $id_producto = $_GET['id_producto'];
    $producto = $this->modelo->getProducto($id_producto);
    $this->vista->mostrarProducto($producto);
  }

function mostrar_contacto() {
  $this->vista->mostrarContacto();
}
function verProductosCat(){
  $id_categoria = $_GET['id_categoria'];
  $productos =$this->modelo->getProductos($id_categoria);
  $categoria = $this->modelo->getCategoria($id_categoria);
  $this->vista->mostrarProductosCat($categoria,$productos);

}

}

?>
