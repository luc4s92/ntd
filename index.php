<?php
require ('controllers/NtdController.php');
require ('config/ConfigApp.php');

$ntdcontroller = new NtdController();


if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
    $ntdcontroller->home();
  die();
}

//switch ($_REQUEST[ConfigApp::$ACTION]) {
//  //agregar las acciones que hacen falta
//  case ConfigApp::$ACTION_MOSTRAR_ADMINCAT:
//      $controllerCat->();
//    break;
//
//  default:
//    $ntdcontroller->home();
//    break;
//}

 ?>
