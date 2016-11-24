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
       console.log($('#formComentario').serialize());
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

   $('#login').click(function(){
     event.preventDefault();
     $.get("index.php?action=mostrar_login",function(data){
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

    $('#register').click(function(){
      event.preventDefault();
      $.get("index.php?action=mostrar_registro",function(data){
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
          console.log($('#formLogin').serialize());
         $.get("index.php?action=loguearse",$("#formLogin").serialize(),function(data){
           console.log($('#formLogin').serialize());
         $('#cargarContenido').html(data);
          renderPagina();
          });
        });

  });
});
