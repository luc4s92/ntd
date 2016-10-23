<?php
  class AdminCatModel{
    private $categorias;
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=ntd_test;charset=utf8', 'root', '');

    }

    function crearCategoria($categoria){
      $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
      $sentencia->execute(array($categoria));
      //$id_categoria = $this->db->lastInsertId(); 
      //return $id_categoria;
    }
  }
 ?>
