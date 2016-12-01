<?php
include_once 'controllers/AdminController.php';
include_once 'models/AdminUsuariosModel.php';
include_once 'views/AdminUsuariosView.php';

class AdminUsuariosController extends AdminController {

function __construct(){
    $this->model = new AdminUsuariosModel();
    $this->view = new AdminUsuariosView();
    $this->checkSesion();
    $this->checkAdmin();
}


function listarUsuarios(){
  $usuarios = $this->model->getUsuarios();
  $this->view->adminUS($usuarios);
}

function EditUsuario(){
  $id_usuario = $_GET['id_usuario'];
  $privilegio = $this->model->getPrivilegio($id_usuario);
  if ($privilegio == 3){
    $priv = 2;
    $this->model->modificarUsuarios($priv,$id_usuario);
  }
  else {
    $priv = 3;
    $this->model->modificarUsuarios($priv,$id_usuario);
  }
}
}

 ?>
