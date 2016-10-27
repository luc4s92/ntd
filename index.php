<?php
require ('controllers/NtdController.php');
require ('controllers/AdminCatController.php');
require ('controllers/AdminProdController.php');
require ('config/ConfigApp.php');

$ntdcontroller = new NtdController();
$catController = new AdminCatController();
$prodController = new AdminProdController();

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
  default:
    $ntdcontroller->home();
    break;
}

 ?>
