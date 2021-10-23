<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:00:04
  from 'C:\xampp\htdocs\tpe2\templates\listCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616837e4bee334_61551161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad020939400c454bd4884085cb2901c565ffb6a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\listCategories.tpl',
      1 => 1634220002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616837e4bee334_61551161 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="lista">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['category']->value->categorias;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<br>

<h2 class="title">Listar Productos por categoria</h2>
    <form action="ProductByCategorie" method="post">
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
        <button type="submit">Load</button>
    </form>


<?php }
}
