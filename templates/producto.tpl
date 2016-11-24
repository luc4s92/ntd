<h3>  {$producto['nombre']}</h3>
  <li>
    {foreach from=$producto['imagenes'] key=index item=imagen}
    <img class="imgpequenia" src="{$imagen['path']}"  class="img-thumbnail">
    {/foreach}
  </li>
<h4>Comentarios</h4>
<hr>

<hr>
<h4>Comentar</h4>

<hr>
<form id="formComentario" enctype="multipart/form-data" action="guardar_comentario" method="post">
<textarea class="form-control" rows="3" name="comentario"></textarea>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1"name="puntaje" required value="">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>
  <input type="submit" name="Agregar" value="enviar">
</form>
