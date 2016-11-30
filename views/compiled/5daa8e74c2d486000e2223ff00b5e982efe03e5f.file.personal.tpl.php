<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 12:40:00
         compiled from "views\personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2646558257b7f2b5379-94464296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5daa8e74c2d486000e2223ff00b5e982efe03e5f' => 
    array (
      0 => 'views\\personal.tpl',
      1 => 1478864395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2646558257b7f2b5379-94464296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58257b7f31b790_17437682',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58257b7f31b790_17437682')) {function content_58257b7f31b790_17437682($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\jaar2\\project\\myband\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primary">
        <table>
            <tr id="hds">
              <th>Naam</th>
              <th>Datum</th>
              <th>Locatie</th>
              <th>Prijs</th>
              <th>Link</th>
            </tr>
          <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <tr>
              <td><p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</p></td>
              <td><p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date'],"%e %b %Y");?>
</p></td>
              <td><p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['location'];?>
</p></td>
              <td><p>€<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
</p></td>
              <td><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
">Video</a></td>
            </tr>
          <?php } ?>
        </table>
        <div id="pagination">
          <ul>
              <li id="toFirst"><a href="?page=personal&pagenr=1">←</a></li>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <li><a href="?page=personal&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }} ?>
              <li id="toLast"><a href="?page=personal&pagenr=<?php echo $_smarty_tpl->tpl_vars['nr_pages']->value;?>
">→</a></li>
          </ul>
        </div>
      </div>
<?php }} ?>
