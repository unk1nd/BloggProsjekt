<?php

// Sessions aktivering
session_start();

// henter smarty klassen
require('libs/Smarty.class.php');

// setter session brukernavn til variabel
$sessionbrukernavn = $_SESSION['bruker'];

// inkluderer menysjekkeren for dynamisk meny 
include ('menyChecker.php');

// kjører database connection
require_once('auth.php');

// henter id fra URL
$brukerid = $db->real_escape_string($_GET['id']);


// henter bruker data fra bruker database og setter i variabler
$resultat = $db->query("SELECT brukernavn,epost,fornavn,etternavn FROM users WHERE id='$brukerid'");
$bruker = $resultat->fetch_object();
$fornavn = $bruker->fornavn;
$etternavn = $bruker->etternavn;
$brukernavn = $bruker->brukernavn;
$epost = $bruker->epost;
$bilde_id = $brukerid;

// oppretter smarty objekt
$smarty = new Smarty;

// sjekker om URL id er samme som session id 
if($brukerid == $_SESSION['id'])
{
	// viser knappene bytt passord og bytt avatar
	$brukermeny = "<a href='byttpassord.php?id=".$_SESSION['id']."'><button class='success_button'>Bytt Passord</button></a>";
	$brukermeny .= "<a href='byttavatar.php?id=".$_SESSION['id']."'><button class='success_button'>Bytt Avatar</button></a>";
	$smarty->assign('brukerpanel', $brukermeny);
}
else 
{
	$smarty->assign('brukerpanel', '');
}

// setter variabler til designet til profil
$smarty->assign('fornavn' , $fornavn);
$smarty->assign('etternavn', $etternavn);
$smarty->assign('brukernavn', $brukernavn);
$smarty->assign('epost', $epost);
$smarty->assign('bilde_id', $bilde_id);
$smarty->assign('session_meny' , $menyinput);

// viser designet
$smarty->display('profil.tpl');

?>