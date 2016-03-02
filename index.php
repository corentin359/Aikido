
<?php
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
$controller;

if (isset($_GET['controller']))
{
	$controller = $_GET['controller']; // recupère l'action passée dans l'URL
}
else
{
	if (isset($_POST['controller']))
	{
		$controller = $_POST['controller']; // recupère l'action passée dans l'URL
	}
	else {
		$controller = "accueil";
	}
}
switch ($controller)
{
	case "accueil": require "{$ROOT}{$DS}controller{$DS}controllerAccueil.php"; break;
	case "utilisateur": require "{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php"; break;
default:
	require "{$ROOT}{$DS}controller{$DS}controllerAccueil.php";
}
?>

