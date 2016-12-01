<?php
require 'api.php';
include_once '../models/ComentariosModel.php';
include_once(dirname(__DIR__)."/controllers/LoginController.php");


class ComentariosApi extends Api
{
  private $model;
  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentariosModel();
  }
  protected function comentarios($argumentos){
    switch ($this->method) {
      case 'GET':
        if(count($argumentos)>0){
          $Comentario = $this->model->getComentario($argumentos[0]);
          $error['Error'] = "El comentario no existe";
            return ($Comentario) ? $Comentario : $error;
          }else{
            return $this->model->getComentarios();
          }
          break;
        case 'DELETE':
         if(count($argumentos)>0){
            $error['Error'] = "El comentario no existe";
           $success['Success'] = "El comentario se borro";
            $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
           return ($filasAfectadas == 1) ? $success : $error;
          }
       break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "El comentario no se creo";
              $comentario = $_POST['comentario'];
              $id_producto = $_POST['id_producto'];
              $puntaje = $_POST['puntaje'];
              $id_comentario = $this->model->crearComentario($comentario,$puntaje,$id_producto );
              $error['Error'] = "asd";
              return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }
}
 ?>
