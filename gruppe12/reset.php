<?php
// aktiverer session
session_start();

// henter smarty klassen, oppretter smarty objektet og viser designet
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->display('reset.tpl');

?>