<?php
// kjører database connection
require_once ('auth.php');

// setter POST til variabel
$brukernavn = $db->real_escape_string($_POST['username']);


// henter brukerinfo fra brukerdatabasen med hjelp av brukernavn
$resultat = $db->query("SELECT brukernavn,passord,auth_status,administrator,id FROM users where brukernavn='$brukernavn'");

// setter resultat fra databasen til variabler
$bruker = $resultat->fetch_object();
$sqlbrukernavn = $bruker->brukernavn;
$sqlpassord = $bruker->passord;
$auth_status = $bruker->auth_status;
$rolle = $bruker->administrator;
$id = $bruker->id;

// om passordfeltet og brukerfeltet har input
if((isset($_POST['username']) ? $_POST['password'] : ''))
	{
				// vist passordet fra POST stemmer overens med passordet fra databasen
				if (md5($_POST['password']) == $sqlpassord)
				{
					// om brukeren ikke er aktivert
					if (!$auth_status)
					{
						// varsler kunden om at brukeren ikke har aktivert kontoen via mail
						echo ("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('Du har ikke aktivert din konto via mail linken.')
    					window.location.href='login.php';
    					</SCRIPT>"); 
					}
					
					// om brukeren er aktivert 
					else
					{
						// aktiverer session og setter session verdier
						session_start();
						$_SESSION['bruker'] = $sqlbrukernavn;
						$_SESSION['loggedin'] = "ok";
						$_SESSION['rolle'] = $rolle;
						$_SESSION['id'] = $id;
						
						// sender brukeren til profilen sin
						header("location: profil.php?id=".$_SESSION['id']."");
					}
				}	
				
				// om passordet eller brukernavn ikke stemmer overens
				else 
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Brukernavn eller passord er feil.')
    				window.location.href='login.php';
    				</SCRIPT>"); 
				}
     }

// om det mangler noe i feltene for innlogging 
else 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Du har ikke skrevet ut begge feltene..')
    window.location.href='login.php';
    </SCRIPT>");
}    

?>