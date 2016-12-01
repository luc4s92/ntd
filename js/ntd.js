$(document).ready(function(){
  "use strict";

$(function renderPagina(){
    $('#adminCategoriaBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_adminCat",function(data){
          $('#cargarContenido').html(data);
          renderPagina();
      });
    });
    $('#adminBtn').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_admin",function(data){
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
     /* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

     var template;
     $.ajax({ url: 'js/templates/comentarios.mst',
      success: function(templateReceived) {
        template = templateReceived;
      }
    });
    var temporizador;

    $('.refresh').click(function(event){
      event.preventDefault();
      var id = $(this).attr("data-idproducto");

      $.get("paquete_comentario",{id_producto: id},function(data) {
      $('.listaComent').html(data);
      getComentariosPack(id);
      temporizador = setInterval(function() {getComentariosPack(id)}, 2000);
        });

    });

    $('.StopTemporizador').click(function(ev){
      event.preventDefault();
      clearInterval(temporizador);
      renderPagina();
    });

    function crearComentarios (data){
    var rendered = Mustache.render(templateComentario,{paquete: data});
    $('.listaComent').html(rendered);
  }

      var templateComentario;
      $.ajax({ url: 'js/templates/comentarios.mst',
      success: function(templateReceived) {
        templateComentario = templateReceived;
      }
    });

        function getComentariosPack (idproducto) {
      $.get( "api/comentarios/"+idproducto, function(data) {
     if(!data['Error'])
     crearComentarios(data);
   });
 }

 $(document).on('click','.eliminarComentario', function () {
   var idComentario = $(this).attr("data-idcomentario");
   $.ajax ({
     url: "api/comentarios/"+idComentario,
     method:"DELETE",
     contentType: "application/json; charset=utf-8",

   });
 });
  /*-----------------------------------------------------------------------------------------------------------------*/
$('#formFiltro').submit(function(ev){
  event.preventDefault();
  console.log($('#formFiltro').serialize());
  $.get("index.php?action=productos_categoria",$('#formFiltro').serialize(), function(data){
    $('#listaProdCat').html(data);
    renderPagina();
  });
});
/* -------------------------------------------------------------------------------------------------------------------*/
$('.updateUsuario').click(function(){
 event.preventDefault();

   $.get("index.php?action=update_usuario",{ id_usuario:$(this).attr("data-idusuario")}, function(data){
     $('#listausuarios').html(data);
     renderPagina();
   });
 });
/*-------------------------------------------------------------------------------------------------------------------- */
$('#AdminUsuarios').click(function(){
 event.preventDefault();
   $.get("index.php?action=mostrar_adminUsuarios", function(data){

     $('#cargarContenido').html(data);
     renderPagina();
   });
 });
  /* ---------------------------------------------------------------------------------------------------------------*/
  $('.eliminarCategoria').click(function(){
   event.preventDefault();
     $.get("index.php?action=eliminar_categoria",{ id_categoria:$(this).attr("data-idcategoria")}, function(data){
       $('#listaCat').html(data);
       $('#categorias').val('');
       renderPagina();
     });
   });

   $('.updateCat').click(function(){
    event.preventDefault();
      $.get("index.php?action=update_cat",{ id_categoria:$(this).attr("data-idcategoria")}, function(data){
        $('#cargarContenido').html(data);
        renderPagina();
      });
    });

    $('.verProducto').click(function(){
     event.preventDefault();
       $.get("index.php?action=ver_producto",{ id_producto:$(this).attr("data-idproducto")}, function(data){

         $('#cargarContenido').html(data);
         renderPagina();
       });
     });

    $('#ActualizarCategoriaBtn').click(function(){
     event.preventDefault();

       var data = {
          id_categoria:$(this).attr("data-idcategoria"),
          nuevacat:$("#nuevacat").val()
        };
        console.log(data);
       $.post("index.php?action=actualizar_categoria",data, function(data){
         renderPagina();
       });
     });

     $('#formComentario').submit(function(ev){
       event.preventDefault();
       var id_producto = $(this).attr("data-idproducto");
       $.post( "api/comentarios", $('#formComentario').serialize(), function( comentarios,id_producto ) {
       });
         renderPagina();
       });

/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

   $('#adminProductoBtn').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_adminProd",function(data){
         $('#cargarContenido').html(data);
         $('#listaProd').val('');
         renderPagina();
     });
   });

  $('#mostrarlogin').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_login",function(data){  // para mostrar el login.tpl
        $('#cargarContenido').html(data);
         renderPagina();
     });
  });

   $('#Productos').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_productos",function(data){
         $('#cargarContenido').html(data);
         $('#listaProd').val('');
         renderPagina();
     });
   });
/* **************************************************************************************************************************************/


$('.updateProd').click(function(){
 event.preventDefault();
   $.get("index.php?action=update_prod",{ id_producto:$(this).attr("data-idproducto")}, function(data){
     $('#cargarContenido').html(data);
     renderPagina();
   });
 });

 $('#ActualizarProductoBtn').submit(function(ev){
   event.preventDefault();
  var formData = new FormData(this);
   $.ajax({
     method: "POST",
     contentType: false,
     processData: false,
     data: formData,
     cache: false,
     url: "index.php?action=actualizar_producto",
     success: function(data){
       alert("El mensaje ha sido enviado con exito.");
       $("#prod").val("");
       $("#categoria").val("");
       $("#img").val("");
      $('#listaProd').html(data);
       },

 });
 renderPagina();
});
$('.eliminarImagen').click(function(){
 event.preventDefault();
   $.get("index.php?action=eliminar_imagen",{ id_imagen:$(this).attr("data-idimagen")}, function(data){
     $('#listaProd').html(data);
     $('#productos').val('');
     renderPagina();
   });
 });
/* ----------------------------------------------------------------------------------------------------------------------------------- */
   $('#formProducto').submit(function(ev){
     event.preventDefault();
    var formData = new FormData(this);
     $.ajax({
       method: "POST",
       contentType: false,
       processData: false,
       data: formData,
       cache: false,
       url: "index.php?action=guardar_producto",
       success: function(data){
         alert("El mensaje ha sido enviado con exito.");
         $("#prod").val("");
         $("#categoria").val("");
         $("#img").val("");
        $('#listaProd').html(data);
         },

   });
   renderPagina();
 });

  $('.eliminarProducto').click(function(){
   event.preventDefault();
     $.get("index.php?action=eliminar_producto",{ id_producto:$(this).attr("data-idproducto")}, function(data){
       $('#listaProd').html(data);
       $('#productos').val('');
       renderPagina();
     });
   });

   $('#mostrarContactoBtn').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_contacto",function(data){
     $('#cargarContenido').html(data);
     renderPagina();
      });
    });


     $('#agregarUsuarioBtn').click(function(){
         event.preventDefault();
         alert('entro');
         $.post("index.php?action=guardar_usuario",$("#formUsuario").serialize(), function(data){
           $('#cargarContenido').html(data);
           renderPagina();
         });
         });

     $('#LoginBtn').click(function(){
          event.preventDefault();
         $.post("index.php?action=login",$("#formLogin").serialize(),function(data){
         $('#cargarContenido').html(data);
          renderPagina();
          });
        });
      $('.logout').click(function(){
        event.preventDefault();
        $.get("index.php?action=logout",function(data){
        $('#cargarContenido').html(data);
         renderPagina();
         });
      });

      $('#register').click(function(){
        event.preventDefault();
        $.get("index.php?action=mostrar_registro",function(data){
        $('#cargarContenido').html(data);
         renderPagina();
         });
      });
  });
});
