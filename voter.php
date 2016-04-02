<?php
session_start(); 
require_once 'config/bdd.inc.php';
require_once 'config/connexion.inc.php';

$page=$_GET['page'];
if (isset($_POST['vote'])){
    print_r($_POST);
     $article = $_POST['article'];   
     $votant = $_POST['votant'];
     $page=$_POST['page'];
     
    //vérification en bdd du dernier votant
    $select_verif = 'SELECT dernier_votant,votes FROM articles WHERE id_article="'.$article.'"';
     $reponse = $bdd->query($select_verif)->fetch();
        $votes = $reponse['votes'];
        if ($reponse) {$dernier = $reponse['dernier_votant']; } else $dernier="";
        if ($votant != $dernier){
     $req_vote = 'UPDATE articles SET dernier_votant ="' . $votant.'", votes ="' . $votes. '"+1 WHERE id_article = "' . $article . '"';
    $bdd->exec($req_vote); //mysql_query($req_modif);           
        }
        }
 header("location:index.php?page=$page");        


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
