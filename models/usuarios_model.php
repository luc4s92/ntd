<?php
class UsuariosModel{
  private $db;

  function __construct(){
      //coneccion con la base de datos
      $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');

  }

  function getUsuarios(){
    //obtiene la lista de categorias de la tabla
    $sentencia = $this->db->prepare("select * from usuario");
    $sentencia->execute();
    $usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }

  function crearUsuario($usuario,$pw,$privilegios){
    $sentencia = $this->db->prepare("INSERT INTO usuario(email,password,privilegio) VALUES(?,?,?)");
    $sentencia->execute(array($usuario,$pw,$privilegios));
  }

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }
}

 ?>
