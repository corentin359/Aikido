<?php

/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 01/03/16
 * Time: 14:59
 */
	require "view{$DS}header.php";
	<?php

    foreach ($tableauEnfant as $ligne)
	{
		echo '<p> '. $ligne::getNomUtilisateur() .'.</p>';
	{
	require "view{$DS}footer.php";
?>
