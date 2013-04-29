<?
// session aktivering
session_start();

// kjøring av database
require_once('auth.php');

// setter POST i variabler
$id = $_SESSION['id'];
$content = $db->real_escape_string($_POST['content']);
$tittel = $db->real_escape_string($_POST['tittel']);
$tags = $db->real_escape_string($_POST['tags']);
$date = time();

// sjekker om bruker er administrator
if($_SESSION['rolle'] == '1')
{
	// sjekker om filen som lastes opp er bildeformat
	if (($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	
	{
		// henter binærdata fra fil
		$fileName = $_FILES['file']['name'];
		$tmpName  = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		$fp      = fopen($tmpName, 'r');
		$image = fread($fp, filesize($tmpName));
		$image = addslashes($image);
		fclose($fp);
	
		// setter inn variabler i artikkel databasen
		$db->query("INSERT INTO articles (user_id, title, content, image, timestamp, tags, hits)
		VALUES ('".$id."', '".$tittel."', '".$content."', '".$image."' ,'".$date."','".$tags."','0')");
		
		// sender brukeren til index
		header("location: index.php");
		
	}
	
	// varsler bruker om at filen ikke er en bildefil
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Du har ikke valgt en bildefil.')
		window.location.href='leggtilArtikkel.php';
		</SCRIPT>");
	}
}

// om bruker ikke er en administrator blir brukeren sendt til index
else 
{
	header("location: index.php");
}

?>