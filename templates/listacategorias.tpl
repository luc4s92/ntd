<ul>
  {foreach from=$categorias key=adminCategoria item=categoria}
    <li>
      {$categoria['nombre']}
       <a class="eliminarCategoria" href="#" data-idcategoria="{$categoria['id_categoria']}"><span class="glyphicon glyphicon-remove-sign " aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>
 <!--mismo problema que en el adminCat.tpl si saco ese link solo me deja borrar 1 y tengo que recargar la pagina -->