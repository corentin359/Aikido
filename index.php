<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 07:50
 *
 */
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
require_once "{$ROOT}{$DS}controller{$DS}Root;
switch ($controller)
{
	case "accueil": require "{$ROOT}{$DS}controller{$DS}ControllerAccueil.php"; break;
	case "utilisateur": require "{$ROOT}{$DS}controller{$DS}ControllerUtilisateur.php"; break;
default:
	require "{$ROOT}{$DS}controller{$DS}ControllerAccueil.php";
}
?>
