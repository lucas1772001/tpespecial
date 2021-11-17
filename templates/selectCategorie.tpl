<div class="tableProducts">

<h2 class="title">Productos por categoria: {$titulo}</h2>

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
                    <td><details class="details">{$product->descripcion}</details></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
<br>
<a class="cta" href='getAllCategories'>Volver</a>
    <br>