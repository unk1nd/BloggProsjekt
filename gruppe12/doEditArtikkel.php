<?
// session aktivering
session_start();

// kjører database connection
require_once('auth.php');

// setter POST i variabler
$id = $db->real_escape_string($_POST['artikkelid']);
$content = $db->real_escape_string($_POST['content']);
$tittel = $db->real_escape_string($_POST['tittel']);
$tags = $db->real_escape_string($_POST['tags']);
$date = time();

// om brukeren er administrator 
if($_SESSION['rolle'] == '1')
{
	// oppdaterer artikkelen med variablene fra POST
	$db->query("UPDATE articles SET title='".$tittel."', content='".$content."', tags='".$tags."' WHERE id='".$id."'");
	
	// sender brukeren til index
	header("location: index.php");
}
	
// om bruker ikke er administrator
else 
{
	header("location: index.php");
}

?>