<span class="pull-right">Hola <strong>{$email}</strong>! <a class="logout" href="">Logout</a></span>
<h1>Lista Productos</h1>

<hr>
<form id="formProducto" enctype="multipart/form-data" action="guardar_producto" method="post">
    <input type="text" id="prod"name="producto" required value="" placeholder="Ingrese el producto">
    <label class="control-label">Adjuntar Imagenes</label>

    <input id="img" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">

      Elige la categoria
    <select type="text" id="cat"name="categoria" required value="">
      {foreach $categorias as $categoria}
      <option   value="{$categoria['id_categoria']}">{$categoria['nombre']} </option>
      {/foreach}
    </select>


    <input type="submit" name="Agregar" value="enviar">
</form>

<div id="listaProd">
  {include file='listaproductos.tpl'}
</div>
 <!-- si saco esta linea no puede acceder al action -->
