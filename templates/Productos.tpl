
<h1> Lista de Productos </h1>

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
    </li>
       {/foreach}
    </li>
  {/foreach}
</ul>
