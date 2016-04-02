<?php
require_once 'config/bdd.inc.php';

if (isset($_POST['adresse'])){
	$adresse=$_POST['adresse'];
	
	    //vérification en bdd de la présence de la valeur (requete pour sid= valeur)
   $verif = 'SELECT * FROM newsletter WHERE email="' . $adresse . '"';
    $reponse = $bdd->query($verif)->fetch();
	 if ($reponse) {
		echo("B");exit();
    }else{

	// contrôle avec un preg_match
	if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $adresse))  {echo "C"  ;exit();}
	
    //inscription en bdd de la présence de la valeur (requete pour sid= valeur)
	$ins = 'INSERT into newsletter (email) VALUES("'.$adresse.'")';
     $reponse = $bdd->query($ins)->fetch();	
	echo("A");return;

    }
}