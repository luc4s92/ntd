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
    $categorias = $this->modelo->getCategorias();
    $this->vista->adminCat($categorias);
  }

  function guardarCategoria(){

    $categoria = $_POST['categoria'];
    $this->modelo->crearCategoria($categoria);
    $categorias = $this->modelo->getCategorias();
    $this->vista->listaAdminCat($categorias);
  }

  function borrarCategoria(){
    $key = $_GET['id_categoria'];
    $this->modelo->eliminarCategoria($key);
    $categorias = $this->modelo->getCategorias();
    $this->vista->listaAdminCat($categorias);
  }

}
 ?>
