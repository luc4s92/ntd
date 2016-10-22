<?php
require('views/AdminCatView.php');
//require('models/NtdModel.php');

class AdminCatController{
  private $vista;
  //private $modelo;

  function __construct(){
    $this->vista = new AdminCatView();

  }

  function mostrarAdminCat(){
    $this->vista->adminCat();
  }
}
 ?>
