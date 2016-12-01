<?php

include_once 'views/LoginView.php';
include_once 'models/UsuariosModel.php';

class LoginController  {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new LoginView();

  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php?action=mostrar_home"); // redirija a algo copado
    die();
  }

  function login(){
    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
    {
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];

      $usuario = $this->model->getUsuario($email);

      if(password_verify($pass, $usuario["password"]))
      {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["privilegio"] = $this->model->getRol($email);
        header("Location: index.php?action=mostrar_home"); // cambiar para que muestre la foto
        die();
      }
      else {
        $this->view->mostrarError("Usuario y password invalidos");
      }
    }

    $this->view->mostrar();
  }
  function mostrarlogin(){
      // si no tiene usuarios la bd muestra en tpl de registro, sino el login
    $us = $this->model->getUsuarios();
    if ($us != null){
      if(isset($_SESSION["email"])){
        $this->view->mostrarNTD();
      }
      else{
        $this->view->mostrarlogin();
      }

    }
    else{
      $this->view->registro();
    }
  }
  function mostrarRegistro(){
    $this->view->registro();
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
}

?>
