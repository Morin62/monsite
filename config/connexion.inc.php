<?php
//creer une variable bool de connexion, initialisée à FALSE;
$_SESSION['logg'] = 'FALSE';
$_SESSION['qui'] = "non connecté(e)";
//echo $_SESSION['logg'];

if (isset($_COOKIE['sid'])) {//on teste la présence de $_COOKIE
    $ids = $_COOKIE['sid']; //attribution de la valeur de sid à une variable
    //echo $ids;
    //vérification en bdd de la présence de la valeur (requete pour sid= valeur)
    $select_verif = 'SELECT * FROM utilisateurs WHERE sid="' . $ids . '"';
     $reponse = $bdd->query($select_verif)->fetch();
    //print_r ($reponse);
    //si on a un résultat, on modifie la valeur de la variable de connexion en TRUE
    if ($reponse) {
        $_SESSION['logg'] = 'TRUE';
        $_SESSION['qui'] = $reponse['pseudo'];
    }
}//echo $_SESSION['logg'];print_r($_SESSION);//echo($_COOKIE['sid']);
?>
