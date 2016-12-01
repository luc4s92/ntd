<span class="pull-right"> <a class="logout" href="">Logout</a></span>
<h1> Lista de Productos </h1>

<div id="listaProdCat">
<ul>
  {foreach from=$categorias key=adminProducto item=categoria}
    <li>
      <h2>{$categoria['nombre']}</h2>

        {foreach from=$categoria['productos'] key=adminProducto item=producto}
        <li>
        <h3>  {$producto['nombre']}</h3>
        <li>
          {foreach from=$producto['imagenes'] key=index item=imagen}
          <img class="imgpequenia" src="{$imagen['path']}"  class="img-thumbnail">
          {/foreach}
        </li>


        <a class="verProducto" href="#" data-idproducto="{$producto['id_producto']}" >Ver Producto</a>
        <hr>
        </li>

         {/foreach}



    </li>
  {/foreach}

</ul>

</div>
<hr>

<form id="formFiltro" enctype="multipart/form-data" action="productos_categoria" method="get">

    <select name="id_categoria" required value="">
      {foreach $categorias as $categoria}
      <option   value="{$categoria['id_categoria']}">{$categoria['nombre']} </option>
      {/foreach}
    </select>
    <input class="btn btn-success" type="submit" name="listar" value="Listar">


</form>

<hr>
<form id="formComentario"  enctype="multipart/form-data" action="agregar_comentario"  method="post">
<textarea class="form-control" rows="3" name="comentario" ></textarea>
<select type="text" id="cat"name="id_producto" required value="">
  {foreach $productos as $producto}
  <option   value="{$producto['id_producto']}">{$producto['nombre']} </option>
  {/foreach}
</select>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1"name="puntaje"  required value="">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>
  <input type="submit" data-idproducto="{$producto['id_producto']}" name="Agregar" value="enviar">
</form>
