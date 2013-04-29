<?php
	
	// henter ut om det er profil bilde som skal vises
	if($_GET['type'] == 'profil')
	{
		// kjører database connection
		require_once ('auth.php');

		// henter id fra URL
		$image_id = $db->real_escape_string($_GET['id']);
	
		
		// henter ut binærkode fra bruker avatar og setter i en variabel
		$resultat = $db->query("SELECT photo FROM users where id='$image_id'");
		$image_blob = $resultat->fetch_object()->photo;
	}
	// henter ut om det kun er artikkelbilde som skal hentes
	else 
	{
		// henter id fra URL
		$image_id = $_GET['id'];
		
		// kjører database connection
		require_once ('auth.php');
		
		// henter ut binærkode fra artikkel bilde og setter i en variabel
		$resultat = $db->query("SELECT image FROM articles where id='$image_id'");
		$image_blob = $resultat->fetch_object()->image;
	}
	
	// genererer bilde ut fra binærkode
	header("Content-Type: image/jpeg");
	echo $image_blob;
?>