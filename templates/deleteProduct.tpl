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