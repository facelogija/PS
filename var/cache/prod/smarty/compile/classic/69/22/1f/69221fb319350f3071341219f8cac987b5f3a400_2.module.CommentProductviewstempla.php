<?php
/* Smarty version 3.1.39, created on 2021-09-14 14:02:11
  from 'module:CommentProductviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614081331a6aa0_50208273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69221fb319350f3071341219f8cac987b5f3a400' => 
    array (
      0 => 'module:CommentProductviewstempla',
      1 => 1631610478,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614081331a6aa0_50208273 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
" method="POST">
    <fieldset class="form-group">
        <label class="form-control-label">Your Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </fieldset>
    <br>
    <fieldset class="form-group">
        <label class="form-control-label">Comment</label>
        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
    </fieldset>
    <br>
    <input type="submit" class="btn btn-outline-primary" value="Submit">
</form>

<?php }
}
