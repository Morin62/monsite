<<<<<<< HEAD
﻿<?php
session_start();
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

//si un commentaire a été envoyé, il faut l'enregistrer
if (isset($_POST['texteCom'])) {
    print_r($_POST);
    $pseudoCom = $_POST['pseudoCom'];
    $titreCom = addcslashes($_POST['titreCom'], "'%_");
    $titreCom = htmlspecialchars($titreCom);//neutralise les balises malveillantes
    $texteCom = addcslashes($_POST['texteCom'], "'%_");
    $texteCom = htmlspecialchars($texteCom);
    $dateCom = date("Y-m-d");
    $article = $_POST['id_encours'];
    $pageEncours = $_POST['pageEncours'];
    $req_insertCom = "insert into commentaires(titreCom,texteCom,pseudoCom,dateCom,id_article) VALUES('$titreCom','$texteCom','$pseudoCom','$dateCom','$article')";
    echo $req_insertCom;
    $bdd->exec($req_insertCom);
    $_SESSION['ok_commentaire'] = "commentaire inséré..."; //on créée une variable de session pour un message ok
    //, puis redirection sur la page courante
    header("location:index.php?page=$pageEncours&commente=");
}

include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
=======
﻿<?php
session_start();
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

//si un commentaire a été envoyé, il faut l'enregistrer
if (isset($_POST['texteCom'])) {
    print_r($_POST);
    $pseudoCom = $_POST['pseudoCom'];
    $titreCom = addcslashes($_POST['titreCom'], "'%_");
    $titreCom = htmlspecialchars($titreCom);//neutralise les balises malveillantes
    $texteCom = addcslashes($_POST['texteCom'], "'%_");
    $texteCom = htmlspecialchars($texteCom);
    $dateCom = date("Y-m-d");
    $article = $_POST['id_encours'];
    $pageEncours = $_POST['pageEncours'];
    $req_insertCom = "insert into commentaires(titreCom,texteCom,pseudoCom,dateCom,id_article) VALUES('$titreCom','$texteCom','$pseudoCom','$dateCom','$article')";
    echo $req_insertCom;
    $bdd->exec($req_insertCom);
    $_SESSION['ok_commentaire'] = "commentaire inséré..."; //on créée une variable de session pour un message ok
    //, puis redirection sur la page courante
    header("location:index.php?page=$pageEncours&commente=");
}

include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
>>>>>>> 7bfe1f8db4081288bc8e047564abfdfc04876fb4
?>