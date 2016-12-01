<div >

  <span class="pull-right">Hola <strong>{$email}</strong>! <a class="logout" href="">Logout</a></span>
<h1>Lista Categorias</h1>

<hr>
<form id="formCategoria" action="guardar_categoria" method="post">
    <input type="text" name="categoria" required value="" placeholder="Ingrese la categoria">
    <input type="submit" name="Agregar" id="agregarCategoriaBtn">
</form>
<div id="listaCat">
  {include file='listacategorias.tpl'}
</div>

</div>
