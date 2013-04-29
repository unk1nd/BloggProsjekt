<?

if($_SESSION['loggedin'] == "")
{
	$menyinput = "<li><a href='login.php'>Login</a></li>";
}
else 
{
	$menyinput = "<li><a href='login.php?x=logout'>Logout</a></li>";
	if($_SESSION['rolle'] == '1')
	{
		$menyinput .= "<li><a href='leggtilArtikkel.php'>Legg til Artikkel</a></li>";
		
	}
	$menyinput .= "<li><a href='profil.php?id=".$_SESSION['id']."'>Profil</a></li>";
}


?>