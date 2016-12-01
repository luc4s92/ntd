<?php
include_once 'views/View.php';

class LoginView extends View{

function mostrar(){
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->display('login.tpl');
}

function mostrarlogin(){
  
  $this->smarty->assign('errores', $this->errores);
  $this->smarty->display('login.tpl');
}
function registro(){
  $this->smarty->display('register.tpl');
}
function mostrarNTD(){

    $this->smarty->display('home.tpl');
}
}


?>
