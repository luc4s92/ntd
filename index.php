<?php
include_once 'config/ConfigApp.php';
include_once 'controllers/NtdController.php';
include_once 'controllers/LoginController.php';
include_once 'controllers/AdminCatController.php';
include_once 'controllers/AdminProdController.php';
include_once 'controllers/AdminUsuariosController.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $NtdController = new NtdController();
  $NtdController->mostrarHome();
}
else {
switch ($_REQUEST[ConfigApp::$ACTION]){
  //  case ConfigApp::$ACTION_MOSTRAR_LOGIN:
    //  $NtdController = new LoginController();
      //$NtdController->login();
      //break;
    case ConfigApp::$ACTION_LOGIN:
      $NtdController = new LoginController();
      $NtdController->login();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $NtdController = new LoginController();
      $NtdController->logout();
      break;
    case ConfigApp::$ACTION_MOSTRAR_ADMINCAT:
      $NtdController = new AdminCatController();
      $NtdController->mostrarAdminCat();
      break;
    case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
      $NtdController = new NtdController();
      $NtdController->verProductos();
      break;
    case ConfigApp::$ACTION_MOSTRAR_HOME:
      $NtdController = new NtdController();
      $NtdController->verHome();
      break;
    case ConfigApp::$ACTION_CONTACTO:
      $NtdController = new NtdController();
      $NtdController->mostrar_contacto();
      break;
    case ConfigApp::$ACTION_MOSTRAR_ADMINPROD:
      $NtdController = new AdminProdController();
      $NtdController->mostrarAdminProd();
      break;
    case ConfigApp::$ACTION_VER_PRODUCTO:
      $NtdController = new NtdController();
      $NtdController->verProducto();
        break;
    case ConfigApp::$ACTION_PRODUCTOS_CATEGORIA:
      $NtdController = new NtdController();
      $NtdController->verProductosCat();
        break;
    case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
    $NtdController = new AdminCatController();
      $NtdController->guardarCategoria();
        break;
    case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
    $NtdController = new AdminCatController();
      $NtdController->borrarCategoria();
        break;
    case ConfigApp::$ACTION_UPDATE_CAT:
    $NtdController = new AdminCatController();
      $NtdController->updateCat();
        break;
    case ConfigApp::$ACTION_ACTUALIZAR_CATEGORIA:
    $NtdController = new AdminCatController();
      $NtdController->actualizarCat();
        break;

    case ConfigApp::$ACTION_GUARDAR_PRODUCTO:
        $NtdController = new AdminProdController();
        $NtdController->guardarProducto();
        break;

    case ConfigApp::$ACTION_ELIMINAR_PRODUCTO:
        $NtdController = new AdminProdController();
        $NtdController->borrarProducto();

        break;
   case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
        $NtdController = new AdminProdController();
        $NtdController->borrarImagen();
        break;
    case ConfigApp::$ACTION_MOSTRAR_REGISTRO:
        $NtdController = new LoginController();
        $NtdController->mostrarRegistro();
        break;
    case ConfigApp::$ACTION_MOSTRAR_ADMIN_USUARIOS:
       $NtdController = new AdminUsuariosController();
       $NtdController->listarUsuarios();
        break;
    case ConfigApp::$ACTION_MOSTRAR_LOGIN:
        $NtdController = new LoginController();
        $NtdController->mostrarlogin();
        break;
    case ConfigApp::$ACTION_LOGOUT:
        $NtdController = new LoginController();
        $NtdController->logout();
        break;
    case ConfigApp::$ACTION_GUARDAR_USUARIO:
        $NtdController = new LoginController();
        $NtdController->guardarUsuario();
        break;

    case ConfigApp::$ACTION_UPDATE_USUARIO:
        $NtdController = new AdminUsuariosController();
        $NtdController->EditUsuario();
        break;

    case ConfigApp::$ACTION_UPDATE_PROD:
        $NtdController = new AdminProdController();
        $NtdController->updateProd();
        break;

    case ConfigApp::$ACTION_ACTUALIZAR_PRODUCTO:
        $NtdController = new AdminProdController();
        $NtdController->actualizarProd();
        break;
    default:
      echo 'Pagina no encontrada';
      break;
  }

}




?>
