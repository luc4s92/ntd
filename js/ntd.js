$(document).ready(function(){

    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){               
          $('#cargarContenido').html(data);
      });
    });

 $('#agregarCategoriaBtn').click(function(){
     event.preventDefault();
      console.log("hasta aca funca");
     $.post("index.php?action=guardar_categoria",$("#formCategoria").serialize(), function(data){
       alert("se guardo");
       $('#listaCat').html(data);
       $('#categorias').val('');
     });
     });

  $('.eliminarCategoria').click(function(){
   event.preventDefault();
    console.log("entro al borrar")
     $.get("index.php?action=eliminar_categoria",{ id_categoria:$(this).attr("data-idcategoria")}, function(data){
       $('#listaCat').html(data);
       $('#categorias').val('');
       console.log("se borro");
     });
   });

});
