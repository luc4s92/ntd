<?php
require_once ('libs/Smarty.class.php');

  class AdminCatView{
    private $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function adminCat($categorias){
      $this->smarty->assign('email', $_SESSION["email"]);
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('adminCategoria.tpl');
    }

    function listaAdminCat($categorias){
      $this->smarty->assign('categorias',$categorias);
      $this->smarty->display('listacategorias.tpl');
    }
    function editCat($categoria){
      $this->smarty->assign('categoria',$categoria);
      $this->smarty->display('actualizarCat.tpl');
    }
  }
?>
