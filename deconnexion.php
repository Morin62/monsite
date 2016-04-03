<?php
setcookie('sid', "", time() - 3600); //pour annuler le cookie, on lui attribue un temps négatif
header("location:index.php");
?>