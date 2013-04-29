<?
// kjører database connection
require_once ('auth.php');

// setter POST i variabler
$epost = $db->real_escape_string($_POST['epost']);


// henter data fra bruker databasen og setter i variabler
$resultat = $db->query("SELECT brukernavn,fornavn,etternavn FROM users WHERE epost='$epost'");
$bruker = $resultat->fetch_object();
$fornavn = $bruker->fornavn;
$etternavn = $bruker->etternavn;
$brukernavn = $bruker->brukernavn;

// funsjon for å generere random passord med store og små bokstaver og tall.
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

// setter ett random passord inn i variabel
$passord = randomPassword();

// oppdaterer passordet i brukerdatabasen
$db->query("UPDATE users SET passord='".md5($passord)."' WHERE epost='$epost'");

// sender nytt passord til eposten til bruker
$name = $fornavn." ".$etternavn;
$logo = "<img src='http://www.atlanticbt.com/blog/wp-content/uploads/2012/04/CAT-LOGO.jpg' width='100px' height='40px'>";
$content = "$logo<br><br>Hei $name <br><br>";
$content .= "Du har bedt om nytt passord og våre systemer har generert ett nytt passord til deg.<br><br>";
$content .= "Brukernavn: $brukernavn<br>Passord: $passord<br><br>";
$content .= "Du kan endre ditt passord på din profil ved innlogging.";
$subject = "Nytt passord";
$mailheader = "From: Gruppe12`s Blogg - Nytt passord\r\n"; 
$mailheader .= "Reply-To: duuxman@gmail.com\r\n"; 
$mailheader .= "Content-type: text/html; charset=utf8\r\n";
mail($epost, $subject, $content, $mailheader) or die("Error!");

// varsler bruker om at nytt passord er sendt på eposten til bruker og sender bruker til index
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Ditt nye passord er sendt til $epost')
window.location.href='index.php';
</SCRIPT>");

?>