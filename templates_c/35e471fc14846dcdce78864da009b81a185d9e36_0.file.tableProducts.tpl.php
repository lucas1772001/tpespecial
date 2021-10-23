<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:00:38
  from 'C:\xampp\htdocs\tpe2\templates\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616862363e5166_84272780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e471fc14846dcdce78864da009b81a185d9e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\tableProducts.tpl',
      1 => 1634230836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616862363e5166_84272780 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tableProducts">
<h2 class="title">Lista completa de todos los productos</h2>

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
    <br><?php }
}
