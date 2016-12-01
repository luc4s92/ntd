<form   method="post">
    <input type="text" name="producto"  id="nuevoProd" value="{$producto['nombre']}" >
    <input type="text" name="id_producto"  id="idprod" value="{$producto['id_producto']}" >
    <li>
    {foreach from=$producto['imagenes'] key=index item=imagen}
    <img class="imgpequenia" src="{$imagen['path']}"  class="img-thumbnail">
    {/foreach}
    </li>
    <label class="control-label">Adjuntar Imagenes</label>
    <input id="img" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">
    <input type="submit" name="Actualizar" data-idproducto="{$producto['id_producto']}" id="ActualizarProductoBtn">
</form>
