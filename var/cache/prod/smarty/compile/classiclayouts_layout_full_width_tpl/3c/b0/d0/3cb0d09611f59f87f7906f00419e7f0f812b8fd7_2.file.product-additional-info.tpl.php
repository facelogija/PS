<?php
/* Smarty version 3.1.39, created on 2021-09-21 23:59:17
  from 'C:\xampp\htdocs\PS\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a47a5990520_73969204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cb0d09611f59f87f7906f00419e7f0f812b8fd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PS\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1631461106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a47a5990520_73969204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
