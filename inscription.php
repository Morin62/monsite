<<<<<<< HEAD
﻿<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */

include_once 'include/header.inc.php';

if (isset($_POST['soumettre'])) {
    $nom = addcslashes($_POST['nom'], "'%_");
    $nom = htmlspecialchars($nom);//neutralise les balises malveillantes
    $prenom = addcslashes($_POST['prenom'], "'%_");
    $prenom = htmlspecialchars($prenom);
    $email = addcslashes($_POST['email'], "'%_");
    $email = htmlspecialchars($email);
    $passe1 = addcslashes($_POST['passe1'], "'%_");
    $passe1 = htmlspecialchars($passe1);
    $passe2 = addcslashes($_POST['passe2'], "'%_");
    $passe2 = htmlspecialchars($passe2);
    $pseudo = addcslashes($_POST['pseudo'], "'%_");
    $pseudo = htmlspecialchars($pseudo);

    //verification de l'existant par nom et email dans la table utilisateurs, 
    $select_util = 'SELECT * FROM utilisateurs WHERE nom= "' . $nom . '" AND email="' . $email . '"';
    $reponse = $bdd->query($select_util)->fetch();
    $erreur = 0;
    if ($reponse) {
        //echo ("<h3>Déjà utilisé, choisissez un autre profil</h3>");
        $erreur = 1;
        $_SESSION['existant'] = "Déjà utilisé, choisissez un autre profil";
    }

    // test les 2 champs mot de passe sont ils identiques ?
    if ($passe1 != $passe2) {
        //echo ("<h3>Les deux mots de passe ne sont pas identiques</h3>");
        $erreur = 1;
        $_SESSION['difference'] = "Les deux mots de passe ne sont pas identiques";
    }

    //après vérifications, insertion du nouvel utilisateur
    if ($erreur == 0) {
        $insert_util = "INSERT INTO utilisateurs(nom,prenom,email,mpasse,pseudo) VALUES ('$nom','$prenom','$email','$passe1','$pseudo')";
        //echo $insert_util;
        $bdd->exec($insert_util);
        header("location:connexion.php"); // puis direction vers connexion.php */	
    } else {
        header("location:inscription.php"); //sinon redirection vers le formulaire d'inscription	
    }
}
if (isset($_SESSION['message_erreur'])) {
    ?><div class="alert alert-error" id="notif">
    <?php echo $_SESSION['existant']; ?></div>
    <?php
    unset($_SESSION['existant']);
}

//lien vers fenetre debogage et template smarty  
    $smarty->debugging = false; //pop up smarty alerte, désactivée
    $smarty->display('inscription.tpl');

//Menu et pied de page
include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
=======
﻿<?php
session_start(); //on ouvre une session pour garder des variables de page en page
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

/* * **SMARTY** */
require_once ('libs/Smarty.class.php'); //appel Smarty, présent dans chaque fichier d'affichage
$smarty = new Smarty();     // création de l'objet Smarty
$smarty->setTemplateDir('template/'); //répertoire des Templates
/* * **SMARTY** */

include_once 'include/header.inc.php';

if (isset($_POST['soumettre'])) {
    $nom = addcslashes($_POST['nom'], "'%_");
    $nom = htmlspecialchars($nom);//neutralise les balises malveillantes
    $prenom = addcslashes($_POST['prenom'], "'%_");
    $prenom = htmlspecialchars($prenom);
    $email = addcslashes($_POST['email'], "'%_");
    $email = htmlspecialchars($email);
    $passe1 = addcslashes($_POST['passe1'], "'%_");
    $passe1 = htmlspecialchars($passe1);
    $passe2 = addcslashes($_POST['passe2'], "'%_");
    $passe2 = htmlspecialchars($passe2);
    $pseudo = addcslashes($_POST['pseudo'], "'%_");
    $pseudo = htmlspecialchars($pseudo);

    //verification de l'existant par nom et email dans la table utilisateurs, 
    $select_util = 'SELECT * FROM utilisateurs WHERE nom= "' . $nom . '" AND email="' . $email . '"';
    $reponse = $bdd->query($select_util)->fetch();
    $erreur = 0;
    if ($reponse) {
        //echo ("<h3>Déjà utilisé, choisissez un autre profil</h3>");
        $erreur = 1;
        $_SESSION['existant'] = "Déjà utilisé, choisissez un autre profil";
    }

    // test les 2 champs mot de passe sont ils identiques ?
    if ($passe1 != $passe2) {
        //echo ("<h3>Les deux mots de passe ne sont pas identiques</h3>");
        $erreur = 1;
        $_SESSION['difference'] = "Les deux mots de passe ne sont pas identiques";
    }

    //après vérifications, insertion du nouvel utilisateur
    if ($erreur == 0) {
        $insert_util = "INSERT INTO utilisateurs(nom,prenom,email,mpasse,pseudo) VALUES ('$nom','$prenom','$email','$passe1','$pseudo')";
        //echo $insert_util;
        $bdd->exec($insert_util);
        header("location:connexion.php"); // puis direction vers connexion.php */	
    } else {
        header("location:inscription.php"); //sinon redirection vers le formulaire d'inscription	
    }
}
if (isset($_SESSION['message_erreur'])) {
    ?><div class="alert alert-error" id="notif">
    <?php echo $_SESSION['existant']; ?></div>
    <?php
    unset($_SESSION['existant']);
}

//lien vers fenetre debogage et template smarty  
    $smarty->debugging = false; //pop up smarty alerte, désactivée
    $smarty->display('inscription.tpl');

//Menu et pied de page
include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
>>>>>>> 7bfe1f8db4081288bc8e047564abfdfc04876fb4
?>