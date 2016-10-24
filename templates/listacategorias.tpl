<ul>
  {foreach from=$categorias key=adminCategoria item=categoria}
    <li>
      {$categoria['nombre']}
       <a class="" href="#" data-idtarea=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>
