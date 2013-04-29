<?
// sessions aktivering
session_start();

// henter smarty klassen
require('libs/Smarty.class.php');

// setter session brukernavn i en variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// oppretter smarty objekt og kjører design
$smarty = new Smarty;
$smarty->display('registrer.tpl'); 

?>