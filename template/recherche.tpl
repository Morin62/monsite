     <div style="float:right"> {$qui}</div>
{foreach from=$tableauArticleSmarty item=tableau} 
    {*from: tableau original  item: objet tableau smarty*}
    
<img src="img/{$tableau['id_article']}.jpg" alt="{$tableau['titre']}" width="200px"/>'
    <h2> {$tableau['titre']} </h2>
    <p>{$tableau['texte']}<p>
    <p>{$tableau['date_fr']}
    {*on ajoute un lien pour modifier l'article avec le parametre indice= n° de l'article*}
    <a href= "modifier.php?indice={$tableau['id_article']}"><span style="{if $sid == ""}display:none;{/if}  margin-left:30px" >Modifier l&apos;article</span></a>
    <a href= "modifier.php?supprime={$tableau['id_article']}"><span style="{if $sid == ""}display:none;{/if}  margin-left:30px" >Supprimer l&apos;article</span></a>
     
	{*les liens modifier et supprimer ne sont visibles qu'après connexion *}
    <p><br />
{/foreach}
 
<div class="pagination">
    <ul>
        {for $i=1 to $nbpages}
                <li {if $i == $page} class="active" {/if}><a href="index.php?page={$i}">{$i}</a></li>
        {/for}
    </ul>
</div>
