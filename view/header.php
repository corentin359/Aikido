<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:54
 */
?>
<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="<?php echo "global.css";?>">
        <meta charset="UTF-8">
        <title>ACA Aïkido Cévennes Aigoual</title>
    </head>
	<body>
	<?php
	if (isset($_GET['club']))
    {
        $club = $_GET['club']; // recupère l'action passée dans l'URL
    }
    else
    {
        if (isset($_POST['club']))
        {
            $club = $_POST['club']; // recupère l'action passée dans l'URL
        }
        else {
            $club = "accueil";
        }
    }
	?>
<?php if (!isset($_SESSION['login'])): ?>
    <a href="./index.php?controller=utilisateur&action=seConnecter&club=<?php echo $club ?>">Se connecter</a>
    <a href="./index.php?controller=utilisateur&action=gestionUtilisateur&club=<?php echo $club ?>">Gestion des utilisateur</a></br></br>
<?php else: ?>
    <a href="./index.php?controller=utilisateur&action=seDeconnecter&club=<?php echo $club ?>">Se déconnecter</a></br></br>
<?php endif; ?>
<header>
    <a href="index.php?controller=<?php echo $controller ?>&club=ACV"><img src="<?php echo "images{$DS}logos{$DS}logoACV.png";?>" alt="Logo ACV" class="logoACV"></a>
    <a href="index.php?controller=accueil&club=<?php echo "$club"; ?>" class="titreACA">
        <h1>
            <?php
            if ($club == "ACV")
                echo "AÏKIDO CÉVENNES LE VIGAN";
            else if ($club == "AMV")
                echo "ARTS MARTIAUX VALLERAUGUE";
            else
                echo "AÏKIDO CÉVENNES AIGOUAL";
            ?>
        </h1>
    </a>
    <a href="index.php?controller=<?php echo $controller ?>&club=AMV"><img src="<?php echo "images{$DS}logos{$DS}logoAMV.jpg";?>" alt="Logo AMV" class="logoAMV"></a>
</header>

<?php
if ($club == "ACV" || $club == "AMV")
{
    ?>
    <nav>
        <ul>
            <li><a href="index.php?controller=accueil&club=ACA">Acceuil</a></li>
            <li><a href="./index.php?controller=horaires&club=<?php echo $club ?>">Horaires</a></li>
            <li><a href="./index.php?controller=accesAuDojo&club=<?php echo $club ?>">Accès au dojo</a></li>
            <li><a href="./index.php?controller=sInscrire&club=<?php echo $club ?>">S'inscrire</a></li>
            <li><a href="./index.php?controller=archives&club=<?php echo $club ?>">Archives</a></li>
        </ul>
    </nav>
    <?php
}
?>
<aside class="menuDroite">
    <h3>VIDEOS</h3>
    Des vidéos de ACV et(ou) AMV ?
    <a href="index.php"><img src="<?php echo "images{$DS}menu{$DS}videos.png";?>" alt="Logo vidéos" class="imageMenuDroite"></a>
    <h3>GALERIE PHOTOS</h3>
    Des photo de ACV et(ou) AMV ?
    <a href=index.php""><img src="<?php echo "images{$DS}menu{$DS}galeriePhotos.png";?>" alt="Logo galerie photos" class="imageMenuDroite"></a>
    <h3>TECHNIQUES</h3>
    Reviser Les techniques en vidéos.
    <a href="index.php"><img src="<?php echo "images{$DS}menu{$DS}techniques.png";?>" alt="Logo technique" class="imageMenuDroite"></a>
    <h3>FAQ</h3>
    La foire aux questions est ouverte !
    <a href="index.php"><img src="<?php echo "images{$DS}menu{$DS}FAQ.png";?>" alt="Logo FAQ" class="imageMenuDroite"></a>
    <h3>LIVRE D'OR</h3>
    Envie de nous laiser un comentaire sur le site.
    <a href="index.php"><img src="<?php echo "images{$DS}menu{$DS}livreDOr.jpg";?>" alt="Logo livre d'or" class="imageMenuDroite"></a>
    <h3>ARCHIVES</h3>
    L'historique de toute les actualiter.
    <a href="index.php"><img src="<?php echo "images{$DS}menu{$DS}archives.png";?>" alt="Logo archives" class="imageMenuDroite"></a>
</aside>
<a href="#top" class="allerEnHaut">↑Aller en haut↑</a>
