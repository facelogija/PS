<?php
/* Smarty version 3.1.39, created on 2021-09-22 00:00:45
  from 'C:\xampp\htdocs\PS\themes\classic\templates\cms\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a47fd52f897_14622310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd3aa8a11e1cf19560bbfd034ad454ef875c39b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PS\\themes\\classic\\templates\\cms\\category.tpl',
      1 => 1631461105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a47fd52f897_14622310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1648501572614a47fd4ee004_28459734', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1139403195614a47fd4f3ad3_68261243', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1648501572614a47fd4ee004_28459734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1648501572614a47fd4ee004_28459734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_sub_categories'} */
class Block_13878357614a47fd4f4183_14845832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['sub_categories']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of sub categories in %name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub_category');
$_smarty_tpl->tpl_vars['sub_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->do_else = false;
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_categories'} */
/* {block 'cms_sub_pages'} */
class Block_1543339375614a47fd519ea9_70913255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cms_pages']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in %category_name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%category_name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_pages']->value, 'cms_page');
$_smarty_tpl->tpl_vars['cms_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->do_else = false;
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_pages'} */
/* {block 'page_content'} */
class Block_1139403195614a47fd4f3ad3_68261243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1139403195614a47fd4f3ad3_68261243',
  ),
  'cms_sub_categories' => 
  array (
    0 => 'Block_13878357614a47fd4f4183_14845832',
  ),
  'cms_sub_pages' => 
  array (
    0 => 'Block_1543339375614a47fd519ea9_70913255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13878357614a47fd4f4183_14845832', 'cms_sub_categories', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1543339375614a47fd519ea9_70913255', 'cms_sub_pages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
