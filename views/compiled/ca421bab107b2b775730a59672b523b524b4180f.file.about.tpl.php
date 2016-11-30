<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 13:21:28
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11079580dd99dbb90d0-32526636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478089284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11079580dd99dbb90d0-32526636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580dd99dbba185_48102394',
  'variables' => 
  array (
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dd99dbba185_48102394')) {function content_580dd99dbba185_48102394($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primary">

      </div>
      <div id="pagination">
        <ul>
            <!-- <li id="toFirst"><a href="?page=about&pagenr=1">←</a></li>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li><a href="?page=about&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
          <?php }} ?>
            <li id="toLast"><a href="?page=about&pagenr=<?php echo $_smarty_tpl->tpl_vars['nr_pages']->value;?>
">→</a></li> -->
        </ul>
      </div>
<?php }} ?>
