<ul>
  {foreach from=$productos key=adminProducto item=producto}
    <li>
      {$producto['nombre']}
       <a class="" href="#" data-producto="{$producto['id_producto']}"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>
       <a class="eliminarProducto" href="#" data-idproducto="{$producto['id_producto']}"><span class="glyphicon glyphicon-remove-sign " aria-hidden="true"></span></a>

    </li>
  {/foreach}
</ul>
