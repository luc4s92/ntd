<ul>
  {foreach from=$usuarios key=adminUsuarios item=usuario}
    <li>
      {$usuario['email']}
      {$usuario['privilegio']}
       <a class="updateUsuario" href="#" data-idusuario="{$usuario['id_usuario']}"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>

    </li>
  {/foreach}
</ul>
