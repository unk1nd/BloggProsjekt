<?
// sessions start
session_start();

// kjører database connection
require_once ('auth.php');

// setter POST i variabler
$pass1 = $db->real_escape_string($_POST['pass1']);
$pass2 = $db->real_escape_string($_POST['pass2']);




// Sjekker om passord 1 og passord 2 stemmer overens 
if($pass1 == $pass2)
{
	// setter nye passordet inn i bruker databasen
	$db->query("UPDATE users SET passord='".md5($pass1)."' WHERE id='".$_SESSION['id']."'");
	
	// varsler kunden om at passordet er endret og sender bruker til profilen igjen
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Ditt passord er endret.')
	window.location.href='profil.php?id=".$_SESSION['id']."';
	</SCRIPT>");
}

// om passord 1 og passord 2 ikke stemmer overens
else 
{
	// varsler kunden om at passordsfeltene ikke stemte med hverandre og kaster bruker tilbake til byttpassord
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Passordfeltene stemte ikke med hverandre.')
	window.location.href='byttpassord.php?id=".$_SESSION['id']."';
	</SCRIPT>");
}

?>