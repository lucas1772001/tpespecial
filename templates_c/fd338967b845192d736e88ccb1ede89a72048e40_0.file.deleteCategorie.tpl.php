<?php
/* Smarty version 3.1.39, created on 2021-10-22 22:21:45
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\deleteCategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61731d596d7d47_88257367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd338967b845192d736e88ccb1ede89a72048e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\deleteCategorie.tpl',
      1 => 1634188545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61731d596d7d47_88257367 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Elimine una categoria</h2>
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
    <br><?php }
}
