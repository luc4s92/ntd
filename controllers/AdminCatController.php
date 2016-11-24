<?php

include_once('views/AdminCatView.php');
include_once('models/AdminCatModel.php');

class AdminCatController  {
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new AdminCatView();
    $this->modelo = new AdminCatModel();
      session_start();

  }


  function mostrarAdminCat(){

    if(isset($_SESSION["email"])){
      $us= $_SESSION["email"];
      $priv = $this->modelo->getRol($us);
      echo $priv;
      if(($priv)==1 || ($priv)==2){
      $categorias = $this->modelo->getCategorias();
      $this->vista->adminCat($categorias);
      }
    }
    else{
      header("Location: index.php?action=mostrar_login");
      die();
    }
  }

  function guardarCategoria(){
  if(isset($_SESSION["email"])){
    $us= $_SESSION["email"];
    $priv = $this->modelo->getRol($us);
    if(($priv)==1 || ($priv)==2){
      $categoria = $_POST['categoria'];
      $this->modelo->crearCategoria($categoria);
      $categorias = $this->modelo->getCategorias();
      $this->vista->listaAdminCat($categorias);
      }
    }
  }

  function updateCat(){
    if(isset($_SESSION["email"])){
      $us= $_SESSION["email"];
      $priv = $this->modelo->getRol($us);
      if(($priv)==1 || ($priv)==2){
          $id_categoria = $_GET['id_categoria'];
          $categoria = $this->modelo->getCategoria($id_categoria);
          $this->vista->editCat($categoria);
      }
    }
  }

  function actualizarCat(){
    if(isset($_SESSION["email"])){
      $us= $_SESSION["email"];
      $priv = $this->modelo->getRol($us);
      if(($priv)==1 || ($priv)==2){
      $id_categoria = $_POST['id_categoria'];
      $nuevacat = $_POST['nuevacat'];
      $this->modelo->editarCategoria($id_categoria,$nuevacat);
    }
  }
  }

  function borrarCategoria(){
    if(isset($_SESSION["email"])){
      $us= $_SESSION["email"];
      $priv = $this->modelo->getRol($us);
      if(($priv)==1 || ($priv)==2){
        $key = $_GET['id_categoria'];
        $this->modelo->eliminarCategoria($key);
        $categorias = $this->modelo->getCategorias();
        $this->vista->listaAdminCat($categorias);
      }
    }
  }

}
 ?>
