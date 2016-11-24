<?php

require ('views/login_view.php');
require ('models/usuarios_model.php');

class LoginController  {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new LoginView();
  }

  function guardarUsuario(){
    $usuario = $_POST['usuario'];
    $pw = $_POST['pw'];
    $pass = password_hash($pw, PASSWORD_DEFAULT);
    $us = $this->model->getUsuarios();
    if ($us != null){
    $privilegios = 3;
    $this->model->crearUsuario($usuario,$pass,$privilegios);
    $this->view->mostrarlogin();
    }
    else{
      $privilegios = 1;
      $this->model->crearUsuario($usuario,$pass,$privilegios);
      $this->view->mostrarlogin();
    }
  }

  function login(){
      // si no tiene usuarios la bd muestra en tpl de registro, sino el login
    $us = $this->model->getUsuarios();
    if ($us != null){
    $this->view->mostrarlogin();
    }
    else{
      $this->view->registro();
    }
  }

  function logueate(){

    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
    {
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];
      $usuario = $this->model->getUsuario($email);
      if(password_verify($pass, $usuario["password"])  ){
          session_start();
          $_SESSION["email"] = $email;
          header("Location: index.php?action=mostrar_productos");
          die();
        }
  //      else {
    //    header("Location: index.php?action=mostrar_productos");
      //  }
      }    //  else {
      //  $this->view->mostrarError("Usuario y password invalidos");
      //}


  //$this->view->mostrarlogin();
  }

 function logout(){
     session_start();
     session_destroy();
     header("Location: index.php");
     die();
   }

  function mostrarRegistro(){
    $this->view->registro();
  }


  function loguinAdmin(){
    $this->view->homeAdmin();
  }
}
 ?>
