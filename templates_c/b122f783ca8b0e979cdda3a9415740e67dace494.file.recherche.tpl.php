<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 16:17:47
         compiled from "template\recherche.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765356547f9b3a7ad5-12775069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b122f783ca8b0e979cdda3a9415740e67dace494' => 
    array (
      0 => 'template\\recherche.tpl',
      1 => 1448378156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765356547f9b3a7ad5-12775069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qui' => 0,
    'tableauArticleSmarty' => 0,
    'tableau' => 0,
    'sid' => 0,
    'nbpages' => 0,
    'i' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56547f9b614d07_69106801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56547f9b614d07_69106801')) {function content_56547f9b614d07_69106801($_smarty_tpl) {?>﻿     <div style="float:right"> <?php echo $_smarty_tpl->tpl_vars['qui']->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['tableau'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tableau']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableauArticleSmarty']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tableau']->key => $_smarty_tpl->tpl_vars['tableau']->value) {
$_smarty_tpl->tpl_vars['tableau']->_loop = true;
?> 
    
    
<img src="img/<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
" width="200px"/>'
    <h2> <?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
 </h2>
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
<p>
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['date_fr'];?>

    
    <a href= "modifier.php?indice=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
"><span style="<?php if ($_smarty_tpl->tpl_vars['sid']->value=='') {?>display:none;<?php }?>  margin-left:30px" >Modifier l&apos;article</span></a>
    <a href= "modifier.php?supprime=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
"><span style="<?php if ($_smarty_tpl->tpl_vars['sid']->value=='') {?>display:none;<?php }?>  margin-left:30px" >Supprimer l&apos;article</span></a>
     
	
    <p><br />
<?php } ?>
 
<div class="pagination">
    <ul>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <li <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page']->value) {?> class="active" <?php }?>><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
        <?php }} ?>
    </ul>
</div>
<?php }} ?>
