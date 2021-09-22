<?php
/* Smarty version 3.1.39, created on 2021-09-22 09:48:56
  from 'C:\xampp\htdocs\PS\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ad1d862f543_98933948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed5ff2b7ba4d2064381c6baeb036c88bde9f60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PS\\themes\\classic\\templates\\index.tpl',
      1 => 1632292836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614ad1d862f543_98933948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75306137614ad1d862b689_50780969', 'page_header_container');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_850566759614ad1d862ca03_82972107', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_75306137614ad1d862b689_50780969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_75306137614ad1d862b689_50780969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row header-bg-grey">
        <div class="col-md-6 col-sm-12 mt-3 pt-2">
            <hr class="short-line">
            <h4 class="mb-2 mt-2">Best Quality Products</h4>
            <p class="huge-font font-weight-bold">We Print What <br> You Want!</p>
            <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien.</p>
            <button class="btn-official mt-2">GET STARTED ></button>
        </div>
        <div class="col-md-6 col-sm-12"><img class="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
First_photo.png"></div>
    </div>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1683496396614ad1d862ce01_49261728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1230602775614ad1d862dbe4_80437479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_440728510614ad1d862d838_59301705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1230602775614ad1d862dbe4_80437479', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_850566759614ad1d862ca03_82972107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_850566759614ad1d862ca03_82972107',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1683496396614ad1d862ce01_49261728',
  ),
  'page_content' => 
  array (
    0 => 'Block_440728510614ad1d862d838_59301705',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1230602775614ad1d862dbe4_80437479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1683496396614ad1d862ce01_49261728', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_440728510614ad1d862d838_59301705', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
