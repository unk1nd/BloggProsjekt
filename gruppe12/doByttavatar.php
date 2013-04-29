<?php
// starter session
session_start();

// kjører database connection
require_once('auth.php');

// sjekker om det inneholder en fil i POST
if(isset($_POST['submit']) && $_FILES['file']['size'] > 0)
{
	// sjekker at det er rett filtype og rett størrelse på fil
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 2000000))
	{
		// henter ut binærkode av fil
		$fileName = $_FILES['file']['name'];
		$tmpName  = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
	
		// setter binærkode inn i databasen
		$db->query("UPDATE users SET photo='".$content."' WHERE id='".$_SESSION['id']."'");
		
		// sender brukeren tilbake til profil
		header("location: profil.php?id=".$_SESSION['id']."");
	}
	
	// kaster brukeren tilbake om filen ikke er en bildefil
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Du har ikke valgt en bildefil.')
		window.location.href='byttavatar.php?id=".$_SESSION['id']."';
		</SCRIPT>");
	}
}
// om brukeren ikke har lagt ved en fil
else 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Du har ikke valgt fil.')
	window.location.href='byttavatar.php?id=".$_SESSION['id']."';
	</SCRIPT>");
}
 
?>