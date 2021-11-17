<ul class="lista">
    {foreach from=$categories item=$category}
        <li>{$category->categorias}</li>
    {/foreach}
</ul>
<br>

<h2 class="title">Listar Productos por categoria</h2>
    <form action="ProductByCategorie" method="post">
        <select name="categoria">
        {foreach from=$categories item=$category}
            <option>{$category->categorias}</option>
        {/foreach}
        </select>
        <button type="submit">Load</button>
    </form>


