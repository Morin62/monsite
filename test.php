<<<<<<< HEAD
﻿<?php
require_once('libs/Smarty.class.php');//présent dans chaque fichier concerné

$smarty = new Smarty();

$smarty->setTemplateDir('template/');

$maVariable="Hello World !";

$smarty->assign('maVariableSmarty',$maVariable);//action sur l'objet décrit, idem pour un tableau

$smarty-> debugging = true;//pop up smarty alerte

$smarty->display('test.tpl');
=======
﻿<?php
require_once('libs/Smarty.class.php');//présent dans chaque fichier concerné

$smarty = new Smarty();

$smarty->setTemplateDir('template/');

$maVariable="Hello World !";

$smarty->assign('maVariableSmarty',$maVariable);//action sur l'objet décrit, idem pour un tableau

$smarty-> debugging = true;//pop up smarty alerte

$smarty->display('test.tpl');
>>>>>>> 7bfe1f8db4081288bc8e047564abfdfc04876fb4
?>