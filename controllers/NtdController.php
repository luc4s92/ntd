<?php
require('views/NtdView.php');
//require('models/NtdModel.php');

class NtdController{
  private $vista;
  //private $modelo;

  function __construct(){
    $this->vista = new NtdView();

  }

  function home(){
    $this->vista->mostrarHome();
  }
}

 ?>
