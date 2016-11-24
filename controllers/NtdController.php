<?php

require('views/NtdView.php');
require('models/NtdModel.php');

class NtdController{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new NtdView();
    $this->modelo = new NtdModel();

  }

  function mostrar_contacto() {
    $this->vista->mostrarContacto();
  }

  function home(){
    $this->vista->mostrarHome();

  }
  function verProductos(){
    $categorias = $this->modelo->getCategorias();
    $this->vista->Productos($categorias);
  }
  function verProducto(){
    $id_producto = $_GET['id_producto'];
    $producto = $this->modelo->getProducto($id_producto);
    $this->vista->mostrarProducto($producto);
  }
}

 ?>
