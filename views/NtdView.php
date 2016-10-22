<?php
require_once ('libs/Smarty.class.php');

class NtdView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarHome(){
    $this->smarty->display('index.tpl');
  }
}
 ?>
