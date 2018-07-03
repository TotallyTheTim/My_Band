<?php
/* Smarty version 3.1.32, created on 2018-07-01 16:50:06
  from 'D:\_School\_Bewijzenmap\PROJ\SMARTY\private\views\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b38ea1e334891_21504844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f96e9b1c8c02ebb13d7248df3f4bf674bdf053a' => 
    array (
      0 => 'D:\\_School\\_Bewijzenmap\\PROJ\\SMARTY\\private\\views\\test.tpl',
      1 => 1530456603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b38ea1e334891_21504844 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hallo <?php echo $_smarty_tpl->tpl_vars['voornaam']->value;?>
</h1>
<p>Je variable zijn: <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p><?php }
}
