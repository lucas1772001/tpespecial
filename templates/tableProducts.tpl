<div class="tableProducts">
<h2 class="title">Lista completa de todas las apuestas  </h2>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
            <tr>
                <td>{$product->producto}</td>
                <td>{$product->categoria}</td>
                <td>{$product->precio}</td>
                <td><details>{$product->descripcion}</details></td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>
<br>
<a class="cta" href='admin'>Administrar</a>
{foreach from=$users item=$user}
    {if $user->rol=='admin'}

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

        <h2 class="title">Elimine un producto escogiendo su id</h2>
        <form action="delete" method="post">
            <select name="producto_id" id="">
            {foreach from=$products item=$product}
                <option>{$product->producto_id}</option>
            {/foreach}
            </select>
            <button type="submit">Borrar</button>
        </form>
        <br>

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

        <h2 class="title">Elimine una categoria</h2>
        <form action="deleteCategory" method="post">
            <select name="categorias">
            {foreach from=$categories item=$category}
                <option>{$category->categorias}</option>
            {/foreach}
            </select>
            <button type="submit">Borrar</button>
        </form>
        <br>

        <h2 class="title">Ingrese un nueva categoria</h2>
        <form action="insertCategory" method="post">
            <input type="text" name="categorias" placeholder="Nueva categoria">
            <input type="submit" value="Agregar">
        </form>
        <br>
    {/if}
{/foreach}
    <br>