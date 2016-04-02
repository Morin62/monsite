<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */
include_once 'include/header.inc.php';

?>


<?php
//definir le nombre d'articles par page
$nbparpage = 3;

//compter le nombre d'articles, puis le nombre de pages
$compter_articles = $bdd->query("SELECT COUNT(*) FROM articles WHERE publie = 1")->fetch();
$nbarticles = $compter_articles[0];
$nbpages = ceil($nbarticles / $nbparpage);

//déterminer la page à afficher, page1 par défaut
$page = (empty($_GET['page'])) ? 1 : $_GET['page']; //opérateur ternaire pointe la page 1 si aucune n'est présente dans l'url
$debut = ($page - 1) * $nbparpage; //-1 car le 1° enregistrement en bdd est à l'indice 0; le 1° article de chaque page est un multiple du nombre par page
if (isset($_SESSION['ok_commentaire'])) { // on signale que le commentaire est posté, par une alerte bootstrap
    ?><div class="alert alert-success" id="notif">
        <?php echo $_SESSION['ok_commentaire']; ?></div><?php
    unset($_SESSION['ok_commentaire']);     //destruction de la variable de session
}

if (isset($_SESSION['ok_article'])) { // on signale que l'article est posté, avec une alerte bootstrap
    ?><div class="alert alert-success" id="notif">
        <?php echo $_SESSION['ok_article']; ?></div><?php
    unset($_SESSION['ok_article']);     //destruction de la varia ble de session
}

if (isset($_SESSION['connect'])) { // on signale que la connexion est établie, avec une alerte bootstrap
    ?> 
    <div class="alert alert-success" id="notif">
        <?php echo $_SESSION['connect']; ?></div><?php
    unset($_SESSION['connect']);     //destruction de la variable de session
}

//initialisation affichage formulaire commentaire
$commente = "";
if (isset($_GET['commente'])) {
    $commente = $_GET['commente'];$commente = htmlspecialchars($commente);
}
//variable formulaire de commentaire
$smarty->assign('commente', $commente);

//corps de page
$select_all_post = "SELECT id_article,titre,texte,DATE_FORMAT(date,'%d/%m/%Y')AS date_fr,pseudo,votes
FROM articles WHERE publie = 1
ORDER BY id_article DESC 
LIMIT $debut,$nbparpage";
$request = $bdd->query($select_all_post);
while ($reponse = $request->fetch()) { //tant qu'il y a un résultat
    $tableauArticleSmarty[] = $reponse; //pour ne pas ecraser les articles à chaque fois, on indexe le tableau
}
$select_commentaires = "SELECT id_article,titreCom,texteCom,DATE_FORMAT(dateCom,'%d/%m/%Y')AS dateCom,pseudoCom
from commentaires ORDER BY id_article DESC ";
$request = $bdd->query($select_commentaires);
while ($result = $request->fetch()) {  //tant qu'il y a un résultat
    $tableauCommentaireSmarty[] = $result;
}
$qui = $_SESSION['qui']; // chaine $qui pour identifier l'utilisateur
$sid = "";
if (ISSET($_COOKIE['sid'])) {
    $sid = $_COOKIE['sid'];
}// la variable $sid teste la présence du cookie de connexion 

$smarty->assign('tableauArticleSmarty', $tableauArticleSmarty);
$smarty->assign('tableauCommentaireSmarty', $tableauCommentaireSmarty);
//variables boucle de pagination
$smarty->assign('page', $page);
$smarty->assign('nbpages', $nbpages);
//variables de connexion
$smarty->assign('qui', $qui);
$smarty->assign('sid', $sid);

//lien vers fenetre debogage et template smarty  
$smarty->debugging = false; //alerte smarty, désactivée
$smarty->display('index.tpl');

//menu latéral et pied de page
include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
?>   