<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 12:09:26
         compiled from "views\styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13539580de02792ccf2-61838847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ab5a5fa3dd9c59daf3b392a1cbd43733f182d0' => 
    array (
      0 => 'views\\styles.tpl',
      1 => 1478084954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13539580de02792ccf2-61838847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580de02792db69_94970844',
  'variables' => 
  array (
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580de02792db69_94970844')) {function content_580de02792db69_94970844($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primary">

      </div>
      <div id="pagination">
        <ul>
            <!-- <li id="toFirst"><a href="?page=styles&pagenr=1">←</a></li>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li><a href="?page=styles&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
          <?php }} ?>
            <li id="toLast"><a href="?page=styles&pagenr=<?php echo $_smarty_tpl->tpl_vars['nr_pages']->value;?>
">→</a></li> -->
        </ul>
      </div>
<?php }} ?>
