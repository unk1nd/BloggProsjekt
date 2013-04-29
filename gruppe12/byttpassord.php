<?
// session aktivering
session_start();

// kjører database connection
require_once('auth.php');

// smarty klassen
require('libs/Smarty.class.php');

// setter session brukernavnet til en variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// henter bruker id fra URL
$brukerid = $db->real_escape_string($_GET['id']);


// henter brukerinformasjon fra databasen
$resultat = $db->query("SELECT brukernavn,epost,fornavn,etternavn FROM users WHERE id='$brukerid'");
$bruker = $resultat->fetch_object();
$fornavn = $bruker->fornavn;
$etternavn = $bruker->etternavn;
$brukernavn = $bruker->brukernavn;
$epost = $bruker->epost;

// om brukernavn som hentes ut er det samme som session brukernavnet kjøres siden, om ikke kastes brukeren tilbake til index
if($brukernavn == $sessionbrukernavn)
{
	$smarty = new Smarty;
	$smarty->assign('session_meny' , $menyinput);
	$smarty->display('byttpassord.tpl');
	
}
else 
{
	header("location: index.php");
}












?>