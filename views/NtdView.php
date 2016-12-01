<?php
include_once 'views/View.php';

class NtdView extends View{

function mostrar(){

  $this->smarty->display('index.tpl');
}

function mostrarNTD(){

  $this->smarty->display('home.tpl');
}
function mostrarContacto(){
  $this->smarty->display('contacto.tpl');
}

function Productos($categorias,$productos){

  $this->smarty->assign('categorias',$categorias);
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('Productos.tpl');
}
function mostrarProducto($producto){
  $this->smarty->assign('producto',$producto);
  $this->smarty->display('producto.tpl');
}
function  mostrarProductosCat($categoria,$productos){
  $this->smarty->assign('categoria',$categoria);
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('listadeproductos.tpl');
}
}
?>
