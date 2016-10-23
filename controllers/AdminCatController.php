<?php
require('views/AdminCatView.php');
require('models/AdminCatModel.php');

class AdminCatController{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new AdminCatView();
    $this->modelo = new AdminCatModel();
  }

  function mostrarAdminCat(){
    $this->vista->adminCat();
  }

  function guardarCategoria(){
    $categoria = $_POST['categoria'];
    $this->modelo->crearCategoria($categoria);
    $this->vista->adminCat();
  }
}
 ?>
