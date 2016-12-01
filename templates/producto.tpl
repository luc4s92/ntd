<h3>  {$producto['nombre']}</h3>
  <li>
    {foreach from=$producto['imagenes'] key=index item=imagen}
    <img class="imgpequenia" src="{$imagen['path']}"  class="img-thumbnail">
    {/foreach}
  </li>
<h4>Comentarios</h4>
<button class="refresh" data-idproducto="{$producto['id_producto']}" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
</button>

<button class="StopTemporizador"  type="button" class="btn btn-default btn-xs pull-right" aria-label="Stop">
                <span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
</button>

<hr>
<div class="listaComent">

</div>
<hr>
