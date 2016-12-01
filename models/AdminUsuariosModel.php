<?php
include_once "models/model.php";

class AdminUsuariosModel extends Model {

//  function getUsuario($email){
//    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
//    $consulta->execute(array($email));
//   return $consulta->fetch(PDO::FETCH_ASSOC);
//  }
function getUsuarios(){
  //obtiene la lista de categorias de la tabla
  $sentencia = $this->db->prepare("select * from usuario");
  $sentencia->execute();
  $usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  return $usuarios;
}

function getUsuario($id_usuario){
  $sentencia = $this->db->prepare( "select * from usuario where id_usuario=?");
  $sentencia->execute(array($id_usuario));
  return $sentencia->fetch(PDO::FETCH_ASSOC);
}
function modificarUsuarios($priv,$id_usuario){
  $sentencia = $this->db->prepare("update usuario  set privilegio=? where id_usuario=?");
  $sentencia->execute(array($priv,$id_usuario));
}
function getPrivilegio($id_usuario){
  $usuario = $this->getUsuario($id_usuario);
  return $usuario['privilegio'];
}
}
?>
