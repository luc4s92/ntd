<ul>
  {foreach from=$categorias key=adminProducto item=categoria}
    <li>
      <h3>{$categoria['nombre']}</h3>
      {foreach from=$categoria['productos'] key=adminProducto item=producto}
      <li>
      {$producto['nombre']}
      <a class="updateProd" href="#" data-idproducto="{$producto['id_producto']}"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>
      <a class="eliminarProducto" href="#" data-idproducto="{$producto['id_producto']}"><span class="glyphicon glyphicon-remove-sign " aria-hidden="true"></span></a>
      {foreach from=$producto['imagenes'] key=index item=imagen}
      <img class="imgpequenia" src="{$imagen['path']}"  class="img-thumbnail">

      <a class="eliminarImagen" href="#" data-idimagen="{$imagen['id_imagen']}"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></a>
      {/foreach}
    </li>
       {/foreach}
    </li>
  {/foreach}
</ul>
