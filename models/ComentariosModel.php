<?php
class ComentariosModel{
  function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');
  }

  function getComentarios($id_producto){
    $sentencia= $this->db->prepare("select * from producto where fk_id_producto=?");
    $sentencia->execute(array($id_producto));
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }



    function crearComentario($comentario,$puntaje,$id_producto){
      $sentencia = $this->db->prepare('INSERT INTO comentario(coment,puntaje,fk_id_producto) VALUES(?,?,?)');
      $sentencia->execute(array($comentario,$puntaje,$id_producto));
      $id_comentario = $this->db->lastInsertId();


      return $id_comentario;
    }

    function eliminarComentario($id_comentario){
      $sentencia = $this->db->prepare("delete from comentario where id_comentario=?");
      $sentencia->execute(array($id_comentario));
      return $sentencia->rowCount();
    }

    function getComentario($id_producto){
          $sentencia = $this->db->prepare( "select * from comentario where fk_id_producto=?");
          $sentencia->execute(array($id_producto));
          $comentario = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $comentario;
  }
}
 ?>
