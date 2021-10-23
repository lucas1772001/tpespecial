<?php
/* Smarty version 3.1.39, created on 2021-10-06 17:29:07
  from 'C:\xampp\htdocs\tpe2\templetes\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615dc0c3753611_13354645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee1615dcabaff280f2007542af328a9fac44b0f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templetes\\insert.tpl',
      1 => 1633534145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615dc0c3753611_13354645 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Ingrese un nuevo producto</h3>
    
    <form action="insertProduct" method="post">
        <input type="text" name="producto" placeholder="Producto">
        <select name="categoria" type="text";
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->categoria;?>
><?php echo $_smarty_tpl->tpl_vars['categorie']->value->categoria;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <input type="text" name="precio" placeholder="Precio">
        <button type="submit">enviar</button>
    </form><?php }
}
