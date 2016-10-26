$(document).ready(function(){

    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){
          $('#cargarContenido').html(data);
      });
    });

 $('#agregarCategoriaBtn').click(function(){
     event.preventDefault();
     $.post("index.php?action=guardar_categoria",$("#formCategoria").serialize(), function(data){
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
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

   $('#adminProductoBtn').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_adminProd",function(data){
         $('#cargarContenido').html(data);
         $('#categoria').val('');
     });
   });

   $('#guardarProductoBtn').click(function(){
       event.preventDefault();
       //alert($('#formProducto').serialize());

       $.post("index.php?action=guardar_producto",$("#formProducto").serialize(), function(data){
         console.log($('#formProducto').serialize());
        // alert("se guardo el producto");
       });
       });
});
