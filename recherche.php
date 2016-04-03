<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
include_once 'include/header.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */
include_once 'include/header.inc.php';


//print_r($_POST); 
if (ISSET($_POST['motcle'])) {
    $motcle = addcslashes($_POST['motcle'], "'_");
    $motcle = htmlspecialchars($motcle);//neutralise les balises malveillantes
    $select_recherche = "SELECT id_article,titre,texte,DATE_FORMAT(date,'%d/%m/%Y')AS date_fr,pseudo FROM articles WHERE titre LIKE '%$motcle%'
	ORDER BY id_article DESC";
    //echo $select_recherche;
    $request = $bdd->query($select_recherche);
    while ($reponse = $request->fetch()) {  //tant qu'il y a un résultat
        $idArt = $reponse['id_article'];
        $titre = $reponse['titre'];
        $texte = $reponse['texte'];
        $date = $reponse['date_fr'];
        $pseudo = $reponse['pseudo'];
        echo '<img src="img/' . $idArt . '.jpg" alt="' . $titre . '" width="200px"/>';
        echo '<h2>' . $titre . '</h2>';
        echo '<p>' . $texte . '</p>';
        echo '<p>' . $date . " Auteur : " . $pseudo . '</p><br />';
    }
}

//menu latéral et pied de page
include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
?>   