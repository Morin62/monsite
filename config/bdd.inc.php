<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=blogg;charset=utf8','root','');
} catch (Exception $e) {
    die('Erreur :'.$e->getMessage());
}
/*mysql_connect($server = 'localhost', $username = 'root', $password = '') or die ("impossible de se connecter: " . mysql_error());
mysql_select_db('blogg');*/
?>