<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';
/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();
$smarty->setTemplateDir('template/');
/* * **SMARTY** */

include_once 'include/header.inc.php';

if (isset($_POST['connexion'])) {
    //print_r($_POST);    
    $email = addcslashes($_POST['email'], "'%_"); //echo '<br>'.$email;
    $email = htmlspecialchars($email);//neutralise les balises malveillantes
    $passe = addcslashes($_POST['passe'], "'%_"); //echo '<br>'.$passe;
    $passe = htmlspecialchars($passe);
    
    $qui = $_SESSION['qui'];
    //interrogation de la table utilisateurs
    $select_util = 'SELECT * FROM utilisateurs WHERE (email="' . $email . '"AND mpasse="' . $passe . '")';
    $reponse = $bdd->query($select_util)->fetch();
    //print_r($reponse);
    $id = $reponse['id'];
    $sid = md5($email . time()); //echo $sid;

    $update = 'UPDATE utilisateurs SET sid= "' . $sid . '" WHERE id="' . $id . '"';
    $bdd->exec($update);
    setcookie('sid', $sid, time() + (30 * 3600));

    if (($email == $reponse['email']) AND ( $passe == $reponse['mpasse'])) {
        $_SESSION['connect'] = "Vous êtes connecté(e)";
        header("location:index.php"); //redirection vers index.php
    } else {
        $_SESSION['connect'] = "Connexion refusée";
        header("location:connexion.php"); //redirection vers connexion.php 
    }
} else {

    if (isset($_SESSION['connect'])) {//avec le if, prévoir si l'utilisateur n'est pas encore connecté
        $qui = $_SESSION['qui'];
        $smarty->assign('connect', $_SESSION['connect']);
        $smarty->assign('qui', $qui);
        //**un_comment
    }
    $smarty->debugging = false; //fenetre smarty debug
    $smarty->display('connexion.tpl');
    unset($_SESSION['connect']);
}

include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
?>
