<?
// aktiverer session
session_start();

// henter inn smarty klassen
require('libs/Smarty.class.php');

// setter session brukernavn til variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// kjører database connection
require_once('auth.php');

// henter brukerdata fra bruker databasen
$brukerid = $db->real_escape_string($brukerid);

$resultat = $db->query("SELECT brukernavn,epost,fornavn,etternavn FROM users WHERE id='$brukerid'");
$bruker = $resultat->fetch_object();
$fornavn = $bruker->fornavn;
$etternavn = $bruker->etternavn;
$brukernavn = $bruker->brukernavn;
$epost = $bruker->epost;

// sjekker om bruker er administrator 
if($_SESSION['rolle'] == '1')
{
	$smarty = new Smarty;
	$smarty->assign('session_meny' , $menyinput);
	$smarty->display('leggtilArtikkel.tpl');
	
}

// om bruker ikke er administrator blir brukeren kastet til index
else 
{
	header("location: index.php");
}

?>