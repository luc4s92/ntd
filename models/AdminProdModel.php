<?php
class AdminProdModel{
  private $db;

  function __construct(){
      //coneccion con la base de datos
      $this->db = new PDO('mysql:host=localhost;dbname=ntd_test;charset=utf8', 'root', '');

  }

  function getCategorias(){
    //obtiene la lista de categorias de la tabla
    $sentencia = $this->db->prepare("select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
  }

  function crearProducto($producto,$id_categoria){
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre) VALUES(?)");
    $sentencia->execute(array($producto)); //revisar si inserta bien en la tabla
    $sentencia = $this->db->prepare("INSERT INTO producto(fk_id_categoria) VALUES(?)");
    $sentencia->execute(array($id_categoria));
  }
}
 ?>
