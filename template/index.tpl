	{*  Include the jQuery library (local or CDN) *}
	
<script src="js/jquery-2.2.1.js"></script>
<script  src="js/bjqs-1.3.min.js"></script>
<link type="text/css" rel="Stylesheet" href="css/bjqs.css" />
	
<div style="float:right"> Connexion : <em>{$qui}</em></div>
<div id="my-slideshow">{*on place dans la div l'objet qui va slider*}
<ul class="bjqs">	
    {*depuis: tableau original  vers: objet tableau smarty*}
    {foreach from=$tableauArticleSmarty item=tableau} 
        <li><img src="img/{$tableau['id_article']}.jpg" alt="{$tableau['titre']}" width="200px"/>
            <h2> {$tableau['titre']} </h2>
            <p>{$tableau['texte']}<p>
            <p>{$tableau['date_fr']} <b>Auteur : </b>{$tableau['pseudo']}</p>

            {* affichage des commentaires associés *}  
            <div>
                <span class="label label-info"> Commentaires :</span></p>
                {foreach from=$tableauCommentaireSmarty item=tabCom}
                    {if $tabCom['id_article']== $tableau['id_article']}
                    <em><span>{$tabCom['dateCom']} - {$tabCom['pseudoCom']} - Titre : {$tabCom['titreCom']}</span></em><br />
                    <p>{$tabCom['texteCom']}</p><br />
                    {/if}
                {/foreach}
            </div>

    {* affichage des liens de modification si connexion *}  
    <div style="{if $sid == ""}display:none;{/if}  margin-left:30px" >
        <ul class ="breadcrumb">
            {*on ajoute des liens qui ne qui sont visibles qu'après connexion pour modifier, supprimer, commenter l'article avec pour parametre le n° de l'article*}
            <li><a href= "modifier.php?indice={$tableau['id_article']}" style="margin-left:20px">Modifier l&apos;article</a></li>
            <li><a href= "modifier.php?supprime={$tableau['id_article']}" style="margin-left:20px">Supprimer l&apos;article</a></li>
            <li><a href= "index.php?page={$page}&commente={$tableau['id_article']}" style="margin-left:20px">Ajouter un commentaire</a></li>       
            <li><a href= "index.php?page={$page}&commente=" style="margin-left:20px">Réduire</a></li>  
        </ul>
                <p> Nombre de votes : {$tableau['votes']}</p>
            <form action ="voter.php" method="POST">
                <input type="hidden" name="article" value="{$tableau['id_article']}">        
                <input type="hidden" name="votant" value="{$qui}">
                <input type="hidden" name="page" value="{$page}">        
                <input type="submit" name="vote" value="Vote" class="form-actions"> 
            </form>    

            <script src="https://ajax."
    {* controle du formulaire commentaires *}
    {literal}
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
    {/literal}

    <div style="{if $commente == ""}display:none;{/if}  margin-left:30px">
            Pseudo : <i>{$qui}</i>
            <form id="formCom" name="formCom" method="post" action="commentaires.php" onsubmit="false" >
                    <input type="hidden" name="id_encours" value="{$tableau['id_article']}">
                    <input type="hidden" name="pseudoCom" value="{$qui}">	
                    <input type="hidden" name="pageEncours" value="{$page}">

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
                            <input type="button" name="inserer" id="inserer" value="Insérer" class="btn btn-medium btn-primary" style="margin-left:20px" onclick="{literal}controle(){/literal}"/>
                    </div>   
            </form>	
    </div>
    <p><br /> 
    </li>
    {/foreach}
</ul>	
</div> 

{* parametrage du slider*}
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
        {for $i=1 to $nbpages}
            <li {if $i == $page} class="active" {/if}><a href="index.php?page={$i}">{$i}</a></li>
        {/for}
    </ul>
</div>


