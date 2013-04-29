<?
// sessions aktivering
session_start();

// kjører database connection
require_once('auth.php');
// smarty klassen
require('libs/Smarty.class.php');

// setter brukernavn fra session i en variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// setter url id til variabel
$brukerid = $db->real_escape_string($_GET['id']);


// Henter ut informasjon om bruker og setter i variabler
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
	$smarty->display('byttavatar.tpl');
	
}
else 
{
	header("location: index.php");
}

?>