<?php

// getHits funsjon 
function getHits($siteid, $db)
{
	// henter treff til gitt artikkel
	$resultat = $db->query("SELECT hits FROM articles WHERE id='$siteid'");
	$site = $resultat->fetch_object();
	$antall_hits = $site->hits;

	// oppdaterer variabelen med antall treff
	$antall_hits = $antall_hits+1;

	// setter inn ny hit i databasen
	$update = $db->query("UPDATE articles SET hits='$antall_hits' WHERE id='$siteid'");
	
}


?>