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

  function mostrarContacto(){
    $this->smarty->display('contacto.tpl');
  }

  function Productos($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('Productos.tpl');
  }
  function mostrarProducto($producto){
    $this->smarty->assign('producto',$producto);
    $this->smarty->display('producto.tpl');
  }
}
 ?>
