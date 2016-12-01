<?php
class AdminController {
  protected $model;
  protected $view;

 function checkSesion(){
   //checkea que el usuario este logueado
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php?action=login");
      die();
    }
  }
  function checkAdmin(){
    $privilegio = $_SESSION["privilegio"] ;
    if( $privilegio  > 1){ // o sea que no es 1 ni 2 redireccion
      header("Location: index.php?action=mostrar_home"); // lo lleva  a los productos
      die();
    }
  }
}
 ?>
