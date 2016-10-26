<?php
class AdminProdModel{
  private $db;

  function __construct(){
      //coneccion con la base de datos
      $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getCategorias(){
    //obtiene la lista de categorias de la tabla
    $sentencia = $this->db->prepare("select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
  }

  function crearProducto($producto,$id_categoria){

    $sentencia = $this->db->prepare('INSERT INTO producto(nombre,fk_id_categoria) VALUES(?,?)');//no inserta una mierda
    $sentencia->execute(array($producto,$id_categoria));
  }
}
 ?>
