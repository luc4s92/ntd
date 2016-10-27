$(document).ready(function(){
$(function renderPagina(){
    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){
          $('#cargarContenido').html(data);
          renderPagina();
      });
    });

 $('#agregarCategoriaBtn').click(function(){
     event.preventDefault();
     $.post("index.php?action=guardar_categoria",$("#formCategoria").serialize(), function(data){
       $('#listaCat').html(data);
       $('#categorias').val('');
       renderPagina();
     });
     });

  $('.eliminarCategoria').click(function(){
   event.preventDefault();
     $.get("index.php?action=eliminar_categoria",{ id_categoria:$(this).attr("data-idcategoria")}, function(data){
       $('#listaCat').html(data);
       $('#categorias').val('');
       renderPagina();
     });
   });
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

   $('#adminProductoBtn').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_adminProd",function(data){
         $('#cargarContenido').html(data);
         $('#categoria').val('');
         renderPagina();
     });
   });

   $('#guardarProductoBtn').click(function(){
       event.preventDefault();
       $.post("index.php?action=guardar_producto",$("#formProducto").serialize(), function(data){
         console.log($('#formProducto').serialize());
         renderPagina();
       });
       });
  });
});
