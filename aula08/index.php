<?php

require_once "vendor/autoload.php";

$smarty = new Smarty();

$smarty->assign('nome','Cesar Bassani');
$users = array('Cesar Bassani', 'joao', 'pedro');
$smarty->assign('users', $users);

//exibe template
$smarty->display('index.tpl');

