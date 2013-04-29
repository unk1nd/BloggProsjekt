<?

// aktiverer session
session_start();

// om URL inneholder kommandoen logout
if($_GET['x'] == 'logout')
{
	// dreper session og sender bruker til login
	session_destroy();
	header("location: login.php");
}

// bruker ikke er logget inn
if($_SESSION['loggedin'] != "ok")
{
	// inkluderer menysjekkeren for dynamisk meny 
	include ('menyChecker.php');
	
	// henter smarty klassen, setter variabler og sender dette til designet
	require('libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->assign('session_meny' , $menyinput);
	$smarty->display('login.tpl'); 		
}

// om bruker er innlogget blir bruker kastet til index
else {
	header("location: index.php");
}

?>
