<<<<<<< HEAD
<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */

if (!isset($_COOKIE['sid'])) {
    header("location:connexion.php");
}//si l'utilisateur n'est pas connecté, redirection vers la page de connexion
if (isset($_POST['envoyer'])) {
    //print_r($_POST);   
    $titre = addcslashes($_POST['titre'], "'%_");
    $titre = htmlspecialchars($titre);//neutralise les balises malveillantes
    $texte = addcslashes($_POST['texte'], "'%_");
    $texte = htmlspecialchars($texte);
    $publie = (!empty($_POST['publie']) ? $_POST['publie'] : 0); //ternaire
    $date = date("Y-m-d"); //format pour la bdd
    $votes= $_POST['votes'];
    
    // qui signe l'article ?
    //interrogation de la table utilisateurs
    $select_util = 'SELECT pseudo FROM utilisateurs WHERE sid="' . $_COOKIE['sid'] . '"';
    $reponse = $bdd->query($select_util)->fetch();
    $pseudo = $reponse['pseudo'];
    $req_insertion = "insert into articles(titre, texte, date,pseudo,publie) VALUES('$titre','$texte','$date','$pseudo',$publie)";
    $bdd->exec($req_insertion); //mysql_query($req_insertion);

    $erreur_image = $_FILES['image']['error']; //une erreur sur le fichier image se traduit par un champ erreur différent de 0
    if ($erreur_image != 0) { //s'il y a une erreur on affiche une alerte
        $_SESSION['message_erreur'] = "Erreur de chargement de votre image"; //on créée une variable de session message d'erreur
        header("location:article.php"); //redirection vers la page article
    } else {
        $id_article = $bdd->lastInsertId(); //on affecte l'id en cours comme nom d'image
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/" . $id_article . ".jpg"); // déplacement et renommage de l'image
        $_SESSION['ok_article'] = "article inséré..."; //on crée une variable de session message d'erreur
        header("location:index.php"); //redirection vers l'accueil
    }
} else {  //si le bouton n'a pas été actionné, on renvoie au formulaire
    /* ------------------zone HTML---------------------- */
    include_once 'include/header.inc.php';
    if (isset($_SESSION['message_erreur'])) {
        ?><div class="alert alert-error" id="notif">
            <?php echo $_SESSION['message_erreur']; ?></div>
        <?php
        unset($_SESSION['message_erreur']);
    }
    
//lien vers fenetre debogage et template smarty  
    $smarty->debugging = false; //pop up smarty alerte, désactivée
    $smarty->display('article.tpl');

//Menu et pied de page
    include_once 'include/menu.inc.php';
    include_once 'include/footer.inc.php';
}
=======
<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */

if (!isset($_COOKIE['sid'])) {
    header("location:connexion.php");
}//si l'utilisateur n'est pas connecté, redirection vers la page de connexion
if (isset($_POST['envoyer'])) {
    //print_r($_POST);   
    $titre = addcslashes($_POST['titre'], "'%_");
    $titre = htmlspecialchars($titre);//neutralise les balises malveillantes
    $texte = addcslashes($_POST['texte'], "'%_");
    $texte = htmlspecialchars($texte);
    $publie = (!empty($_POST['publie']) ? $_POST['publie'] : 0); //ternaire
    $date = date("Y-m-d"); //format pour la bdd
    $votes= $_POST['votes'];
    
    // qui signe l'article ?
    //interrogation de la table utilisateurs
    $select_util = 'SELECT pseudo FROM utilisateurs WHERE sid="' . $_COOKIE['sid'] . '"';
    $reponse = $bdd->query($select_util)->fetch();
    $pseudo = $reponse['pseudo'];
    $req_insertion = "insert into articles(titre, texte, date,pseudo,publie) VALUES('$titre','$texte','$date','$pseudo',$publie)";
    $bdd->exec($req_insertion); //mysql_query($req_insertion);

    $erreur_image = $_FILES['image']['error']; //une erreur sur le fichier image se traduit par un champ erreur différent de 0
    if ($erreur_image != 0) { //s'il y a une erreur on affiche une alerte
        $_SESSION['message_erreur'] = "Erreur de chargement de votre image"; //on créée une variable de session message d'erreur
        header("location:article.php"); //redirection vers la page article
    } else {
        $id_article = $bdd->lastInsertId(); //on affecte l'id en cours comme nom d'image
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/" . $id_article . ".jpg"); // déplacement et renommage de l'image
        $_SESSION['ok_article'] = "article inséré..."; //on crée une variable de session message d'erreur
        header("location:index.php"); //redirection vers l'accueil
    }
} else {  //si le bouton n'a pas été actionné, on renvoie au formulaire
    /* ------------------zone HTML---------------------- */
    include_once 'include/header.inc.php';
    if (isset($_SESSION['message_erreur'])) {
        ?><div class="alert alert-error" id="notif">
            <?php echo $_SESSION['message_erreur']; ?></div>
        <?php
        unset($_SESSION['message_erreur']);
    }
    
//lien vers fenetre debogage et template smarty  
    $smarty->debugging = false; //pop up smarty alerte, désactivée
    $smarty->display('article.tpl');

//Menu et pied de page
    include_once 'include/menu.inc.php';
    include_once 'include/footer.inc.php';
}
>>>>>>> 7bfe1f8db4081288bc8e047564abfdfc04876fb4
?>