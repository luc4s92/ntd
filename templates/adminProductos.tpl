<h1>Lista Productos</h1>

<hr>
<form id="formProducto" enctype="multipart/form-data" action="guardar_producto" method="post">
    <input type="text" name="producto" required value="" placeholder="Ingrese el producto">
    <p>
      elige la categoria
    <select type="text" name="categoria" required value="">
      {foreach $categorias as $categoria}
      <option  selected="selected" value="{$categoria['id_categoria']}">{$categoria['nombre']} </option>
      {/foreach}
    </select>
  </p>
    <input type="file" name="imagenes[]" required value="" multiple />
    <input type="submit" name="Agregar" id="guardarProductoBtn">
</form>

<div id="listaProd">
  {include file='listaproductos.tpl'}
</div>
 <!-- si saco esta linea no puede acceder al action -->
