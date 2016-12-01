<?php
include_once "models/model.php";

class UsuariosModel extends Model {

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }
  function getRol ($email) {
  $usuario = $this->getUsuario($email);
  return $usuario['privilegio'];
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

}
?>
