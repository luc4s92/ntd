<?php
class Controller {
  protected $modelo;
  protected $vista;

  function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php?action=mostrar_login");
      die();
    }
  }
}
 ?>
