
<?php
	require "view{$DS}header.php";

    foreach ($tableauEnfant as $ligne)
	{
		echo '<p> '. $ligne::getNomUtilisateur() .'.</p>';
	{
	require "view{$DS}footer.php";
?>
