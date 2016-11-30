<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 12:40:00
         compiled from "views\aside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252975811b7bb289035-73983116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e9bfb1c7c037a8afaa40dbb35c505e5814289a' => 
    array (
      0 => 'views\\aside.tpl',
      1 => 1478864341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252975811b7bb289035-73983116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811b7bb33bcf2_23193324',
  'variables' => 
  array (
    'resultN' => 0,
    'oneItemN' => 0,
    'resultE' => 0,
    'oneItemE' => 0,
    'resultD' => 0,
    'oneItemD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811b7bb33bcf2_23193324')) {function content_5811b7bb33bcf2_23193324($_smarty_tpl) {?><!DOCTYPE html>
  <div id="secondary">
    <aside id="search">
      <form>
        <input id="text" type="text"></input>
        <input id="submit" type="submit" value="zoeken"></input>
      </form>
    </aside>
    <aside id="recent">
      <h3>MEEST RECENTE BERICHTEN</h3>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['oneItemN'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItemN']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultN']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItemN']->key => $_smarty_tpl->tpl_vars['oneItemN']->value) {
$_smarty_tpl->tpl_vars['oneItemN']->_loop = true;
?>
          <li><a href="?page=news"><?php echo $_smarty_tpl->tpl_vars['oneItemN']->value['title'];?>
</a></li>
        <?php } ?>
      </ul>
    </aside>
    <aside id="events">
      <h3>UPCOMING EVENTS</h3>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['oneItemE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItemE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItemE']->key => $_smarty_tpl->tpl_vars['oneItemE']->value) {
$_smarty_tpl->tpl_vars['oneItemE']->_loop = true;
?>
          <li><a href="?page=events"><?php echo $_smarty_tpl->tpl_vars['oneItemE']->value['title'];?>
</a></li>
        <?php } ?>
      </ul>
    </aside>
    <aside id="archief">
      <h3>DJ's</h3>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['oneItemD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItemD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItemD']->key => $_smarty_tpl->tpl_vars['oneItemD']->value) {
$_smarty_tpl->tpl_vars['oneItemD']->_loop = true;
?>
          <li><a href="?page=djs"><?php echo $_smarty_tpl->tpl_vars['oneItemD']->value['dj'];?>
</a></li>
        <?php } ?>
      </ul>
    </aside>
  </div>
<?php }} ?>
