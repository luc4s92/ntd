<?php
  class AdminCatModel{
    private $categorias;
    private $db;

    function __construct(){
        //coneccion con la base de datos
        $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');

    }

    function crearCategoria($categoria){
      //inserta la categoria en la tabla
      $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
      $sentencia->execute(array($categoria));
      //$id_categoria = $this->db->lastInsertId();
      //return $id_categoria;
    }

    function getCategorias(){
      //obtiene la lista de categorias de la tabla
      $sentencia = $this->db->prepare("select * from categoria");
      $sentencia->execute();
      $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $categorias;
    }

    function eliminarCategoria($id_categoria){
      $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
      $sentencia->execute(array($id_categoria));
      return $sentencia->rowCount();
    }
  }
 ?>
