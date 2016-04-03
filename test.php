<?php
require_once('libs/Smarty.class.php');//présent dans chaque fichier concerné

$smarty = new Smarty();

$smarty->setTemplateDir('template/');

$maVariable="Hello World !";

$smarty->assign('maVariableSmarty',$maVariable);//action sur l'objet décrit, idem pour un tableau

$smarty-> debugging = true;//pop up smarty alerte

$smarty->display('test.tpl');
?>