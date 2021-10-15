<h2 class="title">Ingrese un nuevo producto</h2>
    
    <form action="insertProduct" method="post">
        <input type="text" name="producto" placeholder="Producto">
        <select name="categoria" type="text";
        {foreach from=$categories item=$categorie}
            <option>{$categorie->categorias}</option>
        {/foreach}
        </select>
        <input type="text" name="precio" placeholder="Precio">
        <input type="text" name="descripcion" placeholder="Detail">
        <button type="submit">enviar</button>
    </form>
    <br>