<?
// aktiverer session
session_start();

// henter inn smarty klassen
require('libs/Smarty.class.php');

// setter brukernavn fra session inn i en variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');
// kjører database connection
require_once('auth.php');

// henter artikkel id fra URL
$artikkelid = $db->real_escape_string($_GET['id']);


// henter data fra artikkel databasen
$resultat = $db->query("SELECT title,content,tags FROM articles WHERE id='$artikkelid'");
$artikkel = $resultat->fetch_object();
$tittel = $artikkel->title;
$tags = $artikkel->tags;
$content = $artikkel->content;

// sjekker om brukeren er administrator
if($_SESSION['rolle']== '1')
{
	// om URL inneholder &do=slett
	if($_GET['do'] == 'slett')
	{
		// slett artikkelen
		$resultat = $db->query("DELETE FROM articles WHERE id = $artikkelid");
		
		// sender bruker tilbake til index
		header("location: index.php");
	}
	
	// om URL ikke inneholder slett kommandoen sendes variabler til smarty templaten. 
	else 
	{
		$smarty = new Smarty;
		$smarty->assign('session_meny' , $menyinput);
		$smarty->assign('tittel' , $tittel);
		$smarty->assign('tags' , $tags);
		$smarty->assign('content' , $content);
		$smarty->assign('artikkelid' , $artikkelid);
		$smarty->display('editArtikkel.tpl');
			
	}
	
}

// om bruker ikke er administrator sendes bruker til index
else 
{
	header("location: index.php");
}

?>