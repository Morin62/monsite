<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';
include_once 'include/header.inc.php';

//si le formulaire a été modifié et renvoyé, il faut faire les Update, puis renvoyer sur l'accueil --- sinon on affiche l'article importé
if (isset($_POST['modifier'])) {
    $id_encours = $_POST['id_encours'];
    $upTitre = addcslashes($_POST['titre'], "'%_");
    $upTitre = htmlspecialchars($upTitre);//neutralise les balises malveillantes
    $upTexte = addcslashes($_POST['texte'], "'%_");
    $upTexte = htmlspecialchars($upTexte);
    $upPublie = (!empty($_POST['publie']) ? $_POST['publie'] : 0); //ternaire
    //on ne modifie que le titre, le texte ou la publication
    $req_modif = 'UPDATE articles SET titre ="' . $upTitre . '", texte ="' . $upTexte . '",publie = "' . $upPublie . '" WHERE id_article = "' . $id_encours . '"';
    $bdd->exec($req_modif); //mysql_query($req_modif);

    $_SESSION['ok_article'] = "article inséré..."; //on créée une variable de session message d'erreur
    header("location:index.php"); //redirection vers l'accueil
} else {
    //on teste si le lien "supprimer l'article" a été cliqué	
    if (isset($_GET['supprime'])) {
        $supprime = addcslashes($_GET['supprime'], "'%_");
        //requêtes suppression
        $supprime_article = "DELETE FROM articles WHERE id_article = $supprime";
        $reponse = $bdd->exec($supprime_article);
        $supprime_commentaire = "DELETE FROM commentaires WHERE id_article = $supprime";
        $reponse = $bdd->exec($supprime_commentaire);
        header("location:index.php");
    }

    //on teste si le lien "modifier l'article" a été cliqué
    if (isset($_GET['indice'])) {
        $indice = addcslashes($_GET['indice'], "'%_");
        //echo $indice;
        //il nous faut une requête vers l'article sélectionné pour l'afficher dans les champs
        $select_article = "SELECT id_article,titre,texte,publie,DATE_FORMAT(date,'%d/%m/%Y')AS date_fr FROM articles WHERE id_article=$indice";
        $reponse = $bdd->query($select_article)->fetch();
        $upImage = '<img src="img/' . $reponse['id_article'] . '.jpg" alt="mon image" width="200px"/>';
        $upTitre = $reponse['titre'];
        $upTexte = $reponse['texte'];
        $upPublie = $reponse['publie'];
        //echo $upTexte;

        /* ------------------zone HTML---------------------- */
        include_once 'include/header.inc.php';
        if (isset($_SESSION['message_erreur'])) {
            ?><div class="alert alert-error" id="notif">
            <?php echo $_SESSION['message_erreur']; ?></div>
                <?php
            unset($_SESSION['message_erreur']);
        }
        ?> 
        <form action="modifier.php" method="post" enctype="multipart/form-data" id="form_modif" name="form_modif">
            <input type="hidden" name="id_encours" value="<?php echo $indice ?>">
            <div class="clearfix">
                <label for="titre">Titre : </label>
                <div class="input">
                    <input type="text" name="titre" id="titre" value="<?php echo $upTitre; ?>"/>
                </div>
            </div>    
            <div class="clearfix">
                <label for="texte">Texte : </label>
                <div class="textarea">
                    <textarea name="texte" id="texte" value = ""> <?php echo $upTexte; ?></textarea>
                </div>
            </div>  
            <div class="clearfix">
                <label for="publie">Publié : </label>
                <div class="input">
                    <input type="checkbox" name="publie" id="publie" value="<?php echo $upPublie; ?>" checked="<?php
        if ($upPublie == 1) {
            echo "checked";
        }
        ?>"/>
                </div>
            </div> 
            <div class="form-actions">
                <input type="submit" name="modifier" id="modifier" value="modifier" class="btn btn-large btn-primary" />
            </div>   
        </form>
        <?php
        include_once 'include/menu.inc.php';
        include_once 'include/footer.inc.php';
    }
}
?>