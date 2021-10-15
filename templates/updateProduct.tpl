<h2 class="title">Actualice el producto</h2>
    <form action="confirmUpdate" method="post">
        <input type="text" name="producto" placeholder="Producto">
            <select name="categoria">
                {foreach from=$categories item=$category}
                    <option>{$category->categorias}</option>
                {/foreach}
            </select>
            <select name="id">
                {foreach from=$products item=$product}
                    <option>{$product->producto_id}</option>
                {/foreach}
            </select>
        <input type="text" name="precio" placeholder="Precio">
        <input type="text" name="descripcion" placeholder="Detail">
        <button type="submit">Update</button>
    </form>
    <br>