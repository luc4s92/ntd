<?php
require_once ('libs/Smarty.class.php');

class AdminProdView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function adminProd($categorias){
    $this->smarty->assign('email', $_SESSION["email"]);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminProductos.tpl');
  }
  function listaAdminProd($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('listaproductos.tpl');
  }
  function editProd($producto){
    $this->smarty->assign('producto',$producto);
    $this->smarty->display('actualizarProducto.tpl');
  }
}
 ?>
