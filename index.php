<?php
require ('controllers/NtdController.php');
require ('controllers/AdminCatController.php');
require ('controllers/AdminProdController.php');
require ('controllers/login_controller.php');
require ('config/ConfigApp.php');

$ntdcontroller = new NtdController();
$catController = new AdminCatController();
$prodController = new AdminProdController();
$loginController = new LoginController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
    $ntdcontroller->home();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  //agregar las acciones que hacen falta
  case ConfigApp::$ACTION_MOSTRAR_ADMINCAT:
      $catController->mostrarAdminCat();
    break;
  case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
      $catController->guardarCategoria();
    break;
    case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
        $catController->borrarCategoria();
      break;
    case ConfigApp::$ACTION_UPDATE_CAT:
        $catController->updateCat();
      break;
    case ConfigApp::$ACTION_ACTUALIZAR_CATEGORIA:
        $catController->actualizarCat();
      break;
    case ConfigApp::$ACTION_MOSTRAR_ADMINPROD:
        $prodController->mostrarAdminProd();
        break;
    case ConfigApp::$ACTION_GUARDAR_PRODUCTO:
        $prodController->guardarProducto();
        break;
    case ConfigApp::$ACTION_ELIMINAR_PRODUCTO:
        $prodController->borrarProducto();
        break;
    case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
        $ntdcontroller->verProductos();
        break;
    case ConfigApp::$ACTION_VER_PRODUCTO: //aca qudede
        $ntdcontroller->verProducto();
        break;
    case ConfigApp::$ACTION_CONTACTO:
        $ntdcontroller->mostrar_contacto();
        break;
    case ConfigApp::$ACTION_LOGIN:
        $loginController->login();
        break;
    case ConfigApp::$ACTION_MOSTRAR_REGISTRO:
        $loginController->mostrarRegistro();
        break;
    case ConfigApp::$ACTION_GUARDAR_USUARIO:
        $loginController->guardarUsuario();
        break;
    case ConfigApp::$ACTION_LOGUEARSE:
        $loginController->logueate();
        break;
    case ConfigApp::$ACTION_MOSTRAR_ADMIN:
        $loginController->loguinAdmin(); //capaz que la saco
        break;
  default:
    $ntdcontroller->home();
    break;
}

 ?>
