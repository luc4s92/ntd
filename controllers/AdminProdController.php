<?php
require('views/AdminProdView.php');
require('models/AdminProdModel.php');

class AdminProdController{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new AdminProdView();
    $this->modelo = new AdminProdModel();
  }

  function mostrarAdminProd(){
    $categorias = $this->modelo->getCategorias();
    $this->vista->adminProd($categorias);
  }

 function guardarProducto(){
   $producto = $_POST['producto'];
   $id_categoria = $_POST['categoria'];
   $this->modelo->crearProducto($producto,$id_categoria);
 }

}
 ?>
