<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 12:14:50
         compiled from "views\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16244580de024a025f6-46252353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849ffed76421cf3a6e0a8cd94e53da5f8b6aae8e' => 
    array (
      0 => 'views\\blog.tpl',
      1 => 1477912435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16244580de024a025f6-46252353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580de024a03857_76729003',
  'variables' => 
  array (
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580de024a03857_76729003')) {function content_580de024a03857_76729003($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primary">

      </div>
      <div id="pagination">
        <ul>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li><a href="?page=home&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
          <?php }} ?>
        </ul>
      </div>
<?php }} ?>
