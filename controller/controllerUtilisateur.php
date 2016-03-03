
<?php
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelUtilisateur.php"); // chargement des modèle
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelAdherent.php");
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelEnfant.php");
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelEnseignant.php");
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelMembreDuBureau.php");
require_once ("{$ROOT}{$DS}model{$DS}utilisateur{$DS}ModelContacteAdherent.php");
$action;
$ajouterUtilisateur;
$modifierUtilisateur;
$supprimerUtilisateur;

// recupère les actions passées dans l'URL
if (isset($_GET['action']))
{
	$action = $_GET['action'];
}
else
{
	if (isset($_POST['action']))
	{
		$action = $_POST['action'];
	}
	else
	{
		$action = "create";
	}
}

if (isset($_GET['modifierUtilisateur']))
{
	$modifierUtilisateur = $_GET['modifierUtilisateur'];
}
else
{
	if (isset($_POST['modifierUtilisateur']))
	{
		$modifierUtilisateur = $_POST['modifierUtilisateur'];
	}
	else
	{
		$modifierUtilisateur = "ÉLÈVE ENFANTS";
	}
}

if (isset($_GET['supprimerUtilisateur']))
{
	$supprimerUtilisateur = $_GET['supprimerUtilisateur'];
}
else
{
	if (isset($_POST['supprimerUtilisateur']))
	{
		$supprimerUtilisateur = $_POST['supprimerUtilisateur'];
	}
	else
	{
		$supprimerUtilisateur = "ÉLÈVE ENFANTS";
	}
}

//appel au modèle pour gerer la BDD
if ($modifierUtilisateur == "PARENT" || $supprimerUtilisateur == "PARENT")
{
	$tableauParent =ModelParent::getAllParent();
}
if ($modifierUtilisateur == "ÉLÈVE ADULTE" || $supprimerUtilisateur == "ÉLÈVE ADULTE")
{
	$tableauAdultes = ModelAdultes::getAllAdultes();
}
if ($modifierUtilisateur == "ÉLÈVE ENFANTS" || $supprimerUtilisateur == "ÉLÈVE ENFANTS")
{
	$tableauEnfant = ModelEnfant::getAllEnfant();
}
if ($modifierUtilisateur == "ENSEIGNANT" || $supprimerUtilisateur == "ENSEIGNANT")
{
	$tableauEnseignant = ModelEnseignant::getAllEnseignant();
}
if ($modifierUtilisateur == "MEMBRE DU BUREAU" || $supprimerUtilisateur == "MEMBRE DU BUREAU")
{
	$tableauMembreDuBureau = ModelMembreDuBureau::getAllMembreDuBureau();
}



  //"redirige" vers les vue
switch ($action)
{
	case "seConnecter":
		require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewSeConnecterUtilisateur.php");
	break;
	case "gestionUtilisateur":
		require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewGestionUtilisateur.php");
	break;
	case "ajouterUtilisateur":
		require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewAjouterUtilisateur.php");
	break;
	case "modifierUtilisateur":
		require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewModifierUtilisateur.php");
	break;
	case "supprimerUtilisateur":
		require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewSupprimerUtilisateur.php");
	break;
default:
	require_once ("{$ROOT}{$DS}view{$DS}utilisateur{$DS}viewGestionUtilisateur.php");
}
?>

