<?php
require_once ('libs/Smarty.class.php');

class AdminProdView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function adminProd($categorias,$productos){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('adminProductos.tpl');
  }
  function listaAdminProd($productos){
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('listaproductos.tpl');
  }
}
 ?>
