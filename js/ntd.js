$(document).ready(function(){

    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){               //"deberia" cargar el html de categoria
          $('#cargarContenido').html(data);
      });
    });

//  $('#agregarColeccionBtn').click(function(){
//      event.preventDefault();
//      $.post("index.php?action=crear_coleccion",$("#formColeccion").serialize(), function(data){
//        $('#listaColeccion')html(data);
//        $('#coleccion').val('');
//      });
//  });

//  $('.eliminarColeccion').click(function(){
//    event.preventDefault();
//      $.get("index.php?actoin=eliminar_coleccion",{ id_coleccion:$(this).attr("data-idcoleccion")}, function(data){
//        $('#listaColeccion')html(data);
//        $('#coleccion').val('');
//      });
//  });

});
