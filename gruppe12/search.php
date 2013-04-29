<?
// aktiverer session
session_start();

// kjører database connection
require_once("auth.php");

// henter smarty klassen
require('libs/Smarty.class.php');

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// oppretter smarty objektet og sender variabel til designet
$smarty = new Smarty;
$smarty->assign('session_meny' , $menyinput);

// henter POST søket og oppdaterer URL
if(isset($_POST['completedsearch']))
{
	$term = $_POST['query'];
	header("location: search.php?sok=".$term."");
	
}

// henter søk ut fra URL
else 
{
	// setter søk fra url
	$term = $db->real_escape_string($_GET[sok]);
	
	// henter artikkler ut fra søkeord
	$resultat = $db->query("SELECT title,id,content,image FROM articles WHERE content LIKE '%".$term."%' OR title LIKE '%".$term."%'");
	
	// setter resultat i array
	while($row = $resultat->fetch_array())
	{
		$resultatarray[] = $row;
		
	}
	
	// sender variabler fra databasen til designet
	$smarty->assign('resultat' , $resultatarray);
	$smarty->assign('antalltreff', count($resultatarray));
	$smarty->assign('sokeord', $term);
	$smarty->display('sok.tpl'); 
}


?>