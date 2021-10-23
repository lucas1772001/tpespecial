<?php
/* Smarty version 3.1.39, created on 2021-10-23 23:10:52
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61747a5c5efbc5_28229577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2084c8deae48264443cc38de816fdae407c8a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\tableProducts.tpl',
      1 => 1635023449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61747a5c5efbc5_28229577 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tableProducts">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->producto;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</td>
                <td><details><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</details></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<br>
<a class="cta" href='admin'>Administrar</a>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == 'admin') {?>

    <h2 class="title">Ingrese un nuevo producto</h2>
        
        <form action="insertProduct" method="post">
            <input type="text" name="producto" placeholder="Producto">
            <select name="categoria" type="text";
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['categorie']->value->categorias;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="text" name="precio" placeholder="Precio">
            <input type="text" name="descripcion" placeholder="Detail">
            <button type="submit">enviar</button>
        </form>
        <br>

        <h2 class="title">Elimine un producto escogiendo su id</h2>
        <form action="delete" method="post">
            <select name="producto_id" id="">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['product']->value->producto_id;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit">Borrar</button>
        </form>
        <br>

        <h2 class="title">Actualice el producto</h2>
        <form action="confirmUpdate" method="post">
            <input type="text" name="producto" placeholder="Producto">
                <select name="categoria">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['category']->value->categorias;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <select name="id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['product']->value->producto_id;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <input type="text" name="precio" placeholder="Precio">
            <input type="text" name="descripcion" placeholder="Detail">
            <button type="submit">Update</button>
        </form>
        <br>

        <h2 class="title">Elimine una categoria</h2>
        <form action="deleteCategory" method="post">
            <select name="categorias">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['category']->value->categorias;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br><?php }
}
