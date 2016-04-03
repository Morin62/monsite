<?php /* Smarty version Smarty-3.1.15, created on 2015-11-17 17:34:31
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210995641f7c6ecfd98-96211998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1447617986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210995641f7c6ecfd98-96211998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5641f7c6f2f6d8_67587838',
  'variables' => 
  array (
    'connect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641f7c6f2f6d8_67587838')) {function content_5641f7c6f2f6d8_67587838($_smarty_tpl) {?>﻿	<?php if (isset($_smarty_tpl->tpl_vars['connect']->value)) {?>

        <div class="alert alert-error" id="notif">
			<?php echo $_smarty_tpl->tpl_vars['connect']->value;?>

	   </div>


	<?php }?>
		<h2> Connexion</h2>
		<h4> Saisissez les identifiants choisis lors de votre inscription</h4>
		<div>
			<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">
				<div class="clearfix">
					<label for="email">Email : </label>
					<div class="input">
						<input type="email" name="email" id="email" value=""/>
					</div>
				</div>    
				<div class="clearfix">
					<label for="passe">Mot de passe : </label>
					<div class="input">
						<input type="password" name="passe" id="passe" value=""/>
					</div>
				</div>   

				<div class="form-actions">
					<input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary" />
				</div>   
			</form>
		</div>
<?php }} ?>
