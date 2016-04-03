<h2> Inscription</h2>
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
                <label for="email">* Email : </label>
                <div class="input">
                    <input type="email" name="email" id="email" value="" required="required"/>
                </div>
            </div>    
            <div class="clearfix">
                <label for="passe">* Mot de passe : </label>
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
                <label for="pseudo">* Pseudo : </label>
                <div class="input">
                    <input type="text" name="pseudo" id="pseudo" value="" required="required"/>
                </div>
            </div> 

            <div class="form-actions">
                <input type="submit" name="soumettre" value="S'inscrire" class="btn btn-large btn-primary" />
            </div>   
    </form>
</div>

