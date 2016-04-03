<?php require_once 'config/bdd.inc.php';?>
<script src="js/jquery-2.2.1.js"></script>

</div>
<nav class="span4">
    <h3>Menu</h3>

    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="inscription.php">S'inscrire</a></li>
        <li><a href="connexion.php">Se connecter</a></li>
        <li><a href="article.php">Rédiger un article</a></li>
        <li><a href="deconnexion.php">Se déconnecter</a></li>
			
    </ul>
    <br />
    <form action="recherche.php" method="post" enctype="multipart/form-data" id="form_recherche" name="form_recherche">
        <div class="clearfix">
            <label for="motcle">Mot clé: </label>
            <div class="input">
                <input type="text" name="motcle" id="motcle" value=""/>
            </div>
        </div> 
        <div>
            <input type="submit" name="Rechercher" value="Rechercher" class="btn btn-small btn-primary"  style="float:right"/>
        </div><br />   
	
    </form>
	<div id="repnews">
		<div id="message">	</div>
		<label for "adresse">S'abonner :</label>
			<input type="text"  id="adresse" value="" placeholder="(votre mail)"/>
			<input type="button"  id="okabo" value="OK" /><br />
	</div>

<script>
	$(function(){
			$("#okabo").click(function(){
			$.ajax({
				method:"POST",
				url:'newsletter.php',
				data:{adresse: $("#adresse").val()}
				}).done(function(msg){
					console.log("Réponse " + msg); //Réponse A=inséré, B= déjà existant, C=email erronné
					if(msg=='A'){$('#message').html("<div class='alert alert-success'>"+"Vous êtes inscrit(e)"+"</div>");}
					if(msg=='B'){$('#message').html("<div class='alert alert-success'>"+"Vous êtes déjà inscrit(e)"+"</div>");}		
					if(msg=='C'){$('#message').html("<div class='alert alert-danger'>"+"Email invalide"+"</div>");}
						//$('#message').load(location.href+ #message>*,);	
				}).fail(function(){
					console.log("Echec");

				});		
	});
});
</script>
	
</nav>
</div>

</div>
