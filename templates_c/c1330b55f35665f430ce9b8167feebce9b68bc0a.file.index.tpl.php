<?php /* Smarty version Smarty-3.1.15, created on 2016-03-26 22:12:44
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217385643569fcac6c8-84459004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1459026760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217385643569fcac6c8-84459004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5643569fdf1c14_40812723',
  'variables' => 
  array (
    'qui' => 0,
    'tableauArticleSmarty' => 0,
    'tableau' => 0,
    'tableauCommentaireSmarty' => 0,
    'tabCom' => 0,
    'sid' => 0,
    'page' => 0,
    'commente' => 0,
    'nbpages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643569fdf1c14_40812723')) {function content_5643569fdf1c14_40812723($_smarty_tpl) {?>	
	
<script src="js/jquery-2.2.1.js"></script>
<script  src="js/bjqs-1.3.min.js"></script>
<link type="text/css" rel="Stylesheet" href="css/bjqs.css" />
	
<div style="float:right"> Connexion : <em><?php echo $_smarty_tpl->tpl_vars['qui']->value;?>
</em></div>
<div id="my-slideshow">
<ul class="bjqs">	
    
    <?php  $_smarty_tpl->tpl_vars['tableau'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tableau']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableauArticleSmarty']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tableau']->key => $_smarty_tpl->tpl_vars['tableau']->value) {
$_smarty_tpl->tpl_vars['tableau']->_loop = true;
?> 
        <li><img src="img/<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
" width="200px"/>
            <h2> <?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
 </h2>
            <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
<p>
            <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['date_fr'];?>
 <b>Auteur : </b><?php echo $_smarty_tpl->tpl_vars['tableau']->value['pseudo'];?>
</p>

              
            <div>
                <span class="label label-info"> Commentaires :</span></p>
                <?php  $_smarty_tpl->tpl_vars['tabCom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabCom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableauCommentaireSmarty']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabCom']->key => $_smarty_tpl->tpl_vars['tabCom']->value) {
$_smarty_tpl->tpl_vars['tabCom']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['tabCom']->value['id_article']==$_smarty_tpl->tpl_vars['tableau']->value['id_article']) {?>
                    <em><span><?php echo $_smarty_tpl->tpl_vars['tabCom']->value['dateCom'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tabCom']->value['pseudoCom'];?>
 - Titre : <?php echo $_smarty_tpl->tpl_vars['tabCom']->value['titreCom'];?>
</span></em><br />
                    <p><?php echo $_smarty_tpl->tpl_vars['tabCom']->value['texteCom'];?>
</p><br />
                    <?php }?>
                <?php } ?>
            </div>

      
    <div style="<?php if ($_smarty_tpl->tpl_vars['sid']->value=='') {?>display:none;<?php }?>  margin-left:30px" >
        <ul class ="breadcrumb">
            
            <li><a href= "modifier.php?indice=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
" style="margin-left:20px">Modifier l&apos;article</a></li>
            <li><a href= "modifier.php?supprime=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
" style="margin-left:20px">Supprimer l&apos;article</a></li>
            <li><a href= "index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&commente=<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
" style="margin-left:20px">Ajouter un commentaire</a></li>       
            <li><a href= "index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&commente=" style="margin-left:20px">Réduire</a></li>  
        </ul>
                <p> Nombre de votes : <?php echo $_smarty_tpl->tpl_vars['tableau']->value['votes'];?>
</p>
            <form action ="voter.php" method="POST">
                <input type="hidden" name="article" value="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
">        
                <input type="hidden" name="votant" value="<?php echo $_smarty_tpl->tpl_vars['qui']->value;?>
">
                <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">        
                <input type="submit" name="vote" value="Vote" class="form-actions"> 
            </form>    

            <script src="https://ajax."
    
    
        <script language="javascript" type="text/javascript">    
        function controle() {      
            // vérification javascript des champs obligatoires non vides 	
            var titreCom=document.getElementById("titreCom").value;
            var texteCom=document.getElementById("texteCom").value;

            if (titreCom === "") { alert(" Le champ Titre du commentaire est vide "); 
            document.formCom.titreCom.focus();
            return false;}

            if (texteCom === "") { alert(" Le champ Texte du commentaire est vide ");
            document.formCom.texteCom.focus();
            return false;}

            //if(titreCom && texteCom ){ 
            document.formCom.method="POST";
            document.formCom.action="commentaires.php";

            //soumission du formulaire
            document.getElementById("formCom").submit();  
        }      
        </script>
    

    <div style="<?php if ($_smarty_tpl->tpl_vars['commente']->value=='') {?>display:none;<?php }?>  margin-left:30px">
            Pseudo : <i><?php echo $_smarty_tpl->tpl_vars['qui']->value;?>
</i>
            <form id="formCom" name="formCom" method="post" action="commentaires.php" onsubmit="false" >
                    <input type="hidden" name="id_encours" value="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id_article'];?>
">
                    <input type="hidden" name="pseudoCom" value="<?php echo $_smarty_tpl->tpl_vars['qui']->value;?>
">	
                    <input type="hidden" name="pageEncours" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">

                            <div class="clearfix">
                                    <label for="titreCom">Titre : </label>
                                    <div class="input">
                                            <input type="text" name="titreCom" id="titreCom" value=""/>
                                    </div>
                            </div>  

                            <div class="clearfix">
                                    <label for="texteCom">Texte : </label>
                                    <div class="textarea">
                                            <textarea name="texteCom" id="texteCom" value = "" ></textarea>
                                    </div>
                            </div>  

                    <div class="form-actions">
                            <input type="reset" name="effacer" id="effacer" value="Effacer" class="btn btn-small btn-primary" />
                            <input type="button" name="inserer" id="inserer" value="Insérer" class="btn btn-medium btn-primary" style="margin-left:20px" onclick="controle()"/>
                    </div>   
            </form>	
    </div>
    <p><br /> 
    </li>
    <?php } ?>
</ul>	
</div> 


<script>	
	jQuery(document).ready(function($) {
	$('#my-slideshow').bjqs({
		'height' : 750,
		'width' : 600,
		'animtype' : 'slide',
                'animduration' : 7000,
		'randomstart' : true,
                'showcontrols' : true,
                'nexttext' : '>>',
                'prevtext' : '<<'               
		});
	});
</script>

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
