<?php
require_once ('libs/Smarty.class.php');

  class AdminCatView{
    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function adminCat($categorias){
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('adminCategoria.tpl');
    }
    function listaAdminCat($categorias){
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('listacategorias.tpl');
    }
  }
?>
