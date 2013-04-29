<?php

// kjører database connection
require_once ('auth.php');

// setter POST i variabler
$brukernavn = $db->real_escape_string($_POST['username']);
$passord = $db->real_escape_string($_POST['password']);
$passord2 = $db->real_escape_string($_POST['password2']);
$epost = $db->real_escape_string($_POST['epost']);
$antibot = $db->real_escape_string($_POST['antibot']);
$fornavn = $db->real_escape_string($_POST['fornavn']);
$etternavn = $db->real_escape_string($_POST['etternavn']);


// diverse if setninger for å se om noen av feltene er tomme.
if (!empty($passord))
	{
		if(!empty($brukernavn))
		{
			if(!empty($epost))
			{
				if(!empty($fornavn))
				{
					if(!empty($etternavn))
					{
						// sjekker om antibot er riktig skrevet inn
						if($antibot == 'kittens go')
						{
							// sjekker om passordfeltene er ulike	
							if($passord != $passord2)
							{
								echo ("<SCRIPT LANGUAGE='JavaScript'>
	    						window.alert('Passordfeltene stemmer ikke overens.')
	    						window.location.href='registrer.php';
	    						</SCRIPT>");
							}
							else 
							{
								// sjekker om brukernavn eller epost allerede er registrert			
								$sjekkdb = $db->query("SELECT epost,brukernavn FROM users WHERE epost='".$epost."' OR brukernavn='".$brukernavn."'");
								$row_count = $sjekkdb->num_rows;
								if($row_count < 0)
								{	
									echo ("<SCRIPT LANGUAGE='JavaScript'>
			    					window.alert('Ser ut som du har en konto i systemet.')
			    					window.location.href='registrer.php';
			    					</SCRIPT>");	
								} 
								
								// om alt stemmer kjøres selve registreringen
								else 
								{
									// setter default avatar bilde til konto
									$tmpName = "images/default_profil.jpg";
									$fp      = fopen($tmpName, 'r');
									$defaultImage = fread($fp, filesize($tmpName));
									$defaultImage = addslashes($defaultImage);
									fclose($fp);
									
									// genererer auth nummer
									$auth_nr = rand(10000000,90000000);
									
									// setter inn i databasen
									$db->query("INSERT INTO users (brukernavn, fornavn, etternavn, passord, epost, administrator, lastip, auth_nr, auth_status, photo)
									VALUES ('".$brukernavn."', '".$fornavn."', '".$etternavn."', '".md5($passord)."' ,'".$epost."','0','".$_SERVER['REMOTE_ADDR']."','".$auth_nr."','0', '".$defaultImage."')");
									
									// sender aktiverings epost til bruker.
									$name = $fornavn." ".$etternavn;
									$logo = "<img src='http://www.atlanticbt.com/blog/wp-content/uploads/2012/04/CAT-LOGO.jpg' width='100px' height='40px'>";
									$content = "$logo<br><br>Velkommen $name <br><br>Du er nå registrert ved Gruppe12`s Blogg.<br><br>";
									$content .= "Du må aktiver kontoen din med å trykke <a href='http://bendiksens.net/gruppe12/aktiver.php?auth_nr=$auth_nr'>her</a> for å logge inn.<br><br>";
									$content .= "Brukernavn: $brukernavn<br>Passord: $passord";
									$subject = "Registrering ved Blogg Gruppe12";
									$mailheader = "From: Gruppe12`s Blogg - Aktivering\r\n"; 
									$mailheader .= "Reply-To: duuxman@gmail.com\r\n"; 
									$mailheader .= "Content-type: text/html; charset=utf8\r\n";
									mail($epost, $subject, $content, $mailheader) or die("Error!");
									
									// varsler kunden om at epost er sendt og at den inneholder aktiveringslink for konto
									echo ("<SCRIPT LANGUAGE='JavaScript'>
		    						window.alert('Systemet har sendt en mail til $epost med en aktiveringslink')
		    						window.location.href='registrer.php';
		    						</SCRIPT>");
	    						}
	    					}
						}

						// kaster bruker tilbake om antibot ikke er riktig skrevet inn.
						else 
						{
							echo ("<SCRIPT LANGUAGE='JavaScript'>
    						window.alert('Du har ikke skrevet i antibotfeltet..')
    						window.location.href='registrer.php';
    						</SCRIPT>");
						}	
				}
				
			}	
		}		
	}	
}

// Varsler bruker om at ikke alle feltene er skrevet inn.
else 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Du har ikke skrevet ut alle feltene..')
    window.location.href='registrer.php';
    </SCRIPT>");
}    



?>