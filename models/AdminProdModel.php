<?php
class AdminProdModel{
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



  function crearProducto($producto,$id_categoria,$imagenes){
    $sentencia = $this->db->prepare('INSERT INTO producto(nombre,fk_id_categoria) VALUES(?,?)');
    $sentencia->execute(array($producto,$id_categoria));
    $id_producto = $this->db->lastInsertId();

    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_producto) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_producto));
    }
    return $id_producto;
  }

  function eliminarProducto($id_producto){
    $sentencia = $this->db->prepare("delete from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->rowCount();
  }

}
 ?>
