<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 11:13:17
         compiled from "views\djs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3229580de025b7ce68-93740932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d02b296e787a7e8789c3487358fa1ee08e6994' => 
    array (
      0 => 'views\\djs.tpl',
      1 => 1478081309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229580de025b7ce68-93740932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580de025b7db62_08230021',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580de025b7db62_08230021')) {function content_580de025b7db62_08230021($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\jaar2\\project\\myband\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primary">
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <article>
          <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['dj'];?>
</h1>
          <content><p><span>Groep: </span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['group'];?>
</p>
          <p><span>Naam: </span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</p>
          <p><span>Style: </span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['style'];?>
</p>
          <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],200,"...",true);?>
</p></content><br>
          <img src="content/img/djs/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['dj'];?>
"></img><br>
          <div id="social">
            <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['facebook'];?>
" target="_blank"><img src="content/img/social/facebook.png" alt="facebook"></img></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['instagram'];?>
" target="_blank"><img src="content/img/social/instagram.png" alt="instagram"></img></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['youtube'];?>
" target="_blank"><img src="content/img/social/youtube.png" alt="youtube"></img></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['soundcloud'];?>
" target="_blank"><img src="content/img/social/soundcloud.png" alt="soundcloud"></img></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['twitter'];?>
" target="_blank"><img src="content/img/social/twitter.png" alt="twitter"></img></a>
          </div>
        </article>
        <?php } ?>
        <div id="pagination">
          <ul>
              <li id="toFirst"><a href="?page=djs&pagenr=1">←</a></li>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <li><a href="?page=djs&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }} ?>
              <li id="toLast"><a href="?page=djs&pagenr=<?php echo $_smarty_tpl->tpl_vars['nr_pages']->value;?>
">→</a></li>
          </ul>
        </div>
      </div>
<?php }} ?>
