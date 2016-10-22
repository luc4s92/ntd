<?php
require_once ('libs/Smarty.class.php');

  class AdminCatView{
    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function adminCat(){
      $this->smarty->display('adminCategoria.tpl');
    }
  }
?>
