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