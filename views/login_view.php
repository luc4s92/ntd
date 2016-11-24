<?php
require_once ('libs/Smarty.class.php');


class LoginView {
  private $smarty;
  private $errores;
  function __construct(){
    $this->smarty = new Smarty();
  }

//  function mostrarError($error){
  //  array_push($this->errores, $error);
  //}

function mostrarlogin(){
//  $this->smarty->assign('errores', $this->errores);
  $this->smarty->display('login.tpl');
}
function registro(){
  $this->smarty->display('register.tpl');
}

function homeAdmin(){
  $this->smarty->display('admin.tpl');
}

}


 ?>
