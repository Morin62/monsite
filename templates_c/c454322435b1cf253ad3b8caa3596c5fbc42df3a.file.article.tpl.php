<?php /* Smarty version Smarty-3.1.15, created on 2015-12-17 18:38:19
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238895672f30b049944-89501845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1450373707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238895672f30b049944-89501845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5672f30b1146d2_73597567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672f30b1146d2_73597567')) {function content_5672f30b1146d2_73597567($_smarty_tpl) {?><form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
    <div class="clearfix">
        <label for="titre">Titre : </label>
        <div class="input">
            <input type="text" name="titre" id="titre" value=""/>
        </div>
    </div>    
    <div class="clearfix">
        <label for="texte">Texte : </label>
        <div class="textarea">
            <textarea name="texte" id="texte"> </textarea>
        </div>
    </div>  
    <div class="clearfix">
        <label for="image">Image : </label>
        <div class="input">
            <input type="file" name="image" id="image"/>
        </div>
    </div>  
    <div class="clearfix">
        <label for="publie">Publié : </label>
        <div class="input">
            <input type="checkbox" name="publie" id="publie" value="1"/>
        </div>
    </div> 
    <div class="form-actions">
        <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary" />
    </div>   
</form>
   <?php }} ?>
