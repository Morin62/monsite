<?php /* Smarty version Smarty-3.1.15, created on 2015-12-19 17:45:35
         compiled from "template\inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2409567589af93d4b6-38903830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ab5c01a12d348fde08553e144c09a9b76daf3b' => 
    array (
      0 => 'template\\inscription.tpl',
      1 => 1450543314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409567589af93d4b6-38903830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567589afa043e6_08942973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567589afa043e6_08942973')) {function content_567589afa043e6_08942973($_smarty_tpl) {?><h2> Inscription</h2>
<h4> Vos coordonnées : </h4>     
<div>
    <form action="inscription.php" method="post" enctype="multipart/form-data" id="form_inscription" name="form_inscription">
        <div class="clearfix">
            <label for="nom">Nom : </label>
            <div class="input">
                <input type="text" name="nom" id="nom" value=""/>
            </div>
            <div class="clearfix">
                <label for="prenom">Prénom : </label>
                <div class="input">
                    <input type="text" name="prenom" id="prenom" value=""/>
                </div>
            </div> 
            <div class="clearfix">
                <label for="email">Email : </label>
                <div class="input">
                    <input type="email" name="email" id="email" value="" required="required"/>
                </div>
            </div>    
            <div class="clearfix">
                <label for="passe">Mot de passe : </label>
                <div class="input">
                    <input type="password" name="passe1" id="passe" value="" required="required"/>
                </div>
            </div>   
            <div class="clearfix">
                <label for="passe">Retapez le mot de passe : </label>
                <div class="input">
                    <input type="password" name="passe2" id="passe" value=""/>
                </div>
            </div>  
            <div class="clearfix">
                <label for="pseudo">Pseudo : </label>
                <div class="input">
                    <input type="text" name="pseudo" id="pseudo" value="" required="required"/>
                </div>
            </div> 

            <div class="form-actions">
                <input type="submit" name="soumettre" value="S'inscrire" class="btn btn-large btn-primary" />
            </div>   
    </form>
</div>

<?php }} ?>
