<?php
class NtdModel{
  private $db;

  function __construct(){
      //coneccion con la base de datos
      $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');
  }

  function getImagenes($id_producto){
  $sentencia = $this->db->prepare( "select * from imagen where fk_id_producto=?");
   $sentencia->execute(array($id_producto));
   return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }

  function getProductos($id_categoria){
    $sentencia= $this->db->prepare("select * from producto where fk_id_categoria=?");
    $sentencia->execute(array($id_categoria));
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach($productos as $key => $producto){
      $productos[$key]['imagenes'] = $this->getImagenes($producto['id_producto']);
    }
    return $productos;

  }
  function getProducto($id_producto){
    $sentencia = $this->db->prepare( "select * from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
    $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
    $producto['imagenes']= $this->getImagenes($id_producto);
    return $producto;
  }

  function getCategorias(){
    //obtiene la lista de categorias de la tabla
    $sentencia = $this->db->prepare("select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach($categorias as $key => $categoria ) {
      $categorias[$key]['productos']= $this->getProductos($categoria['id_categoria']);
    }
    return $categorias;

  }
  function getProd(){
    $sentencia = $this->db->prepare("select * from producto");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
  }
  function getCategoria($id_categoria){
    $sentencia = $this->db->prepare( "select * from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
    $categoria = $sentencia->fetch(PDO::FETCH_ASSOC);
    $categoria['productos']= $this->getProductos($id_categoria);
    return $categoria;
  }
}
 ?>
