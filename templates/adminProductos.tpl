<h1>Lista Productos</h1>
<hr>
<form id="formProductos" action="guardar_producto" method="post">
    <input type="text" name="producto" required value="" placeholder="Ingrese el producto">

    <select  class="form-control">
      {foreach $categorias as $categoria}
      <option value="{$categoria['id_categoria']}">{$categoria['nombre']} </option>
      {/foreach}
    </select>
    <input type="submit" name="Agregar" id="agregarProductoBtn">
</form>
<script src="js/ntd.js"></script> <!-- si saco esta linea no puede acceder al action -->
