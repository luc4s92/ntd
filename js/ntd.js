$(document).ready(function(){

    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){               //"deberia" cargar el html de categoria
          $('#cargarContenido').html(data);
      });
    });

 $('#agregarCategoriaBtn').click(function(){
     event.preventDefault();
      console.log("hasta aca funca");
     $.post("index.php?action=guardar_categoria",$("#formCategoria").serialize(), function(data){
       alert("se guardo");
     });
     });

//  $('.eliminarColeccion').click(function(){
//    event.preventDefault();
//      $.get("index.php?actoin=eliminar_coleccion",{ id_coleccion:$(this).attr("data-idcoleccion")}, function(data){
//        $('#listaColeccion')html(data);
//        $('#coleccion').val('');
//      });
//  });

});
