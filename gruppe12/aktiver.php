<?php

// kjører database connection
require_once('auth.php');

// henter auth nummer fra url
$auth = $_GET['auth_nr'];

// om auth nummer i url er tom blir brukeren kastet til index
if($auth == '')
{
	header("location: index.php");
}

// setter aktivering av bruker i databasen
$auth = $db->real_escape_string($auth);
$update = $db->query("UPDATE users SET auth_status='1' WHERE auth_nr='$auth'");




// varsler bruker om at kontoen er aktivert og kaster brukeren til login.
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Din konto er aktivert.')
window.location.href='login.php';
</SCRIPT>");


?>