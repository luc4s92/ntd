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
}

 ?>
