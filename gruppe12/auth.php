<?php

	// database variabler som host, tabell, brukernavn og passord
    $db_host = "jenna.bendiksens.net";
    $db_dbname = "gruppe12";
    $db_username = "gruppe12";
    $db_password = "gruppe12";
    
	// selve oppkoblingen
    $db = new mysqli( $db_host, $db_username, $db_password, $db_dbname);

	// om det oppstår en feil så blir denne printet ut på siden.
    if ($db->connect_error) {
        die('Connect Error (' . $db->connect_errno . ') '
            . $db->connect_error);
    }
?>