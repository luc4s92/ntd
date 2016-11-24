
<h1>Lista Categorias</h1>

<hr>
<form id="formCategoria" action="guardar_categoria" method="post">
    <input type="text" name="categoria" required value="" placeholder="Ingrese la categoria">
    <input type="submit" name="Agregar" id="agregarCategoriaBtn">
</form>
<div id="listaCat">
  {include file='listacategorias.tpl'}
</div>
 <!-- si saco esta linea no puede acceder al action -->
