
	<?php
		require "view{$DS}header.php";
	?>   
<main>
	<section>
	<?php
		$ajouterUtilisateur;
		if (isset($_GET['ajouterUtilisateur']))
		{
			$ajouterUtilisateur = $_GET['ajouterUtilisateur']; // recupère l'action passée dans l'URL
		}
		else
		{
			if (isset($_POST['ajouterUtilisateur']))
			{
				$ajouterUtilisateur = $_POST['ajouterUtilisateur']; // recupère l'action passée dans l'URL
			}
			else {
				$ajouterUtilisateur = "ÉLÈVE ENFANTS";
			}
		}
		if ($ajouterUtilisateur == "PARENT"
			|| $ajouterUtilisateur == "ÉLÈVE ADULTE"
			|| $ajouterUtilisateur == "ÉLÈVE ENFANTS"
			|| $ajouterUtilisateur == "ENSEIGNANT"
			|| $ajouterUtilisateur == "MEMBRE DU BUREAU")
		{
	?>

		<h2>AJOUTER UN <?php echo "$ajouterUtilisateur"; ?></h2>
		<form method=post action="index.php?controller=utilisateur&action=ajouterUtilisateur&club=<?php echo "$club"; ?>">
			<fieldset><legend>Informations personnelles 1</legend>
				Sexe <input type=radio name=sex value=sexFeminin > Féminin
				<input type=radio name=sex value=sexMasculin > Masculin <br><br>
				<label for="nom">Nom</label>
				<input type=text name=nom id=nom class=info><br><br>
				<label for="prenom">Prénom</label>
				<input type=text name=prenom id=prenom class=info><br><br>
				<label for="mail">Adresse e-mail</label>
				<input type=text name=email id=mail class=info><br><br>
				<label for="mail">Téléphone</label>
				<input type=text name=téléphone id=téléphone class=info>
			</fieldset>
			<fieldset><legend>Adresse</legend>
				<label for="ville">Ville</label>
				<input type=text name=ville id=ville class=info><br><br>
				<label for="rue">Rue</label>
				<input type=text name=rue id=rue class=info><br><br>
				<label for="codePostal">Code postal</label>
				<input type=text name=codePostal id=codePostal class=info><br><br>
			</fieldset>
	<?php
		}
		if ($ajouterUtilisateur == "ÉLÈVE ADULTE"
			|| $ajouterUtilisateur == "ÉLÈVE ENFANTS"
			|| $ajouterUtilisateur == "ENSEIGNANT"
			|| $ajouterUtilisateur == "MEMBRE DU BUREAU")
		{
	?>
			<fieldset><legend>Informations personnelles 2</legend>
				<label for="numLicence">Numéro de licence</label>
				<input type=number name=numLicence id=numLicence class=info><br><br>
				<label for="dateDeNaissance">Date de naissance</label>
				<input type=text name=dateDeNaissance id=dateDeNaissance class=info><br><br>
				<label for="motDePasse">mot de passe</label>
				<input type=password name=motDePasse id=motDePasse class=info><br><br>
				<label for="loging">Loging</label>
				<input type=text name=loging id=loging class=info><br><br>
				Certificat médical <input type=radio name=certificatMedical value=oui > Oui
				<input type=radio name=certificatMedical value=non > Non <br><br>
			</fieldset>
			<fieldset><legend>Grade</legend>
				<label for=grade>Grade</label>
				<select name=grade id=grade class=info>
					<option value=1Kyu>6 kyu</option>
					<option value=2kyu>5 kyu</option>
					<option value=3Kyu>4 kyu</option>
					<option value=4Kyu>3 kyu</option>
					<option value=5Kyu>2 kyu</option>
					<option value=6Kyu>1 kyu</option>
					<option value=1Dan>1 dan</option>
					<option value=2Dan>2 dan</option>
					<option value=3Dan>3 dan</option>
					<option value=4Dan>4 dan</option>
					<option value=5Dan>5 dan</option>
					<option value=6Dan>6 dan</option>
					<option value=7Dan>7 dan</option>
					<option value=8Dan>8 dan</option>
					<option value=9Dan>9 dan</option>
					<option value=1Dan>10 dan</option>
				</select><br><br>
			</fieldset>
	<?php
		}
		if ($ajouterUtilisateur == "ÉLÈVE ENFANTS")
		{
	?>
			<fieldset><legend>Ceinture</legend>
				<label for=ceinture>Ceinture</label>
				<select name=ceinture id=ceinture class=info>
					<option value=blanche>Blanche</option>
					<option value=unLisere>Un liseré</option>
					<option value=deuxLisere>Deux liseré</option>
					<option value=blancheJaune>Blanche-jaune</option>
					<option value=jaune>Jaune</option>
					<option value=jauneOrange>Jaune-orange</option>
					<option value=orange>Orange</option>
					<option value=orangeVerte>Orange-verte</option>
					<option value=verte>Verte</option>
					<option value=vertBleu>Vert-bleu</option>
					<option value=bleu>Bleu</option>
					<option value=violet>Violet</option>
					<option value=marron>Marron</option>
					<option value=noire>Noire</option>
				</select><br><br>
				Barrettes
				<input type=radio name=barrette value=0 > 0
				<input type=radio name=barrette value=1 > 1
				<input type=radio name=barrette value=2 > 2
			</fieldset>
	<?php
		}
		if ($ajouterUtilisateur == "ENSEIGNANT")
		{
	
		}
	?>
	<?php
		if ($ajouterUtilisateur == "MEMBRE DU BUREAU")
		{
	?>
			<fieldset><legend>Fonction</legend>
				<label for=fonction>Fonction</label>
				<select name=ceinture id=ceinture class=info>
					<option value=President>Président</option>
					<option value=tresorier>Trésorier</option>
					<option value=secretaire>Secrétaire</option>
					<option value=vicePresident>Vice-président</option>
					<option value=viceTresorier>Vice-trésorier</option>
					<option value=viceSecretaire>Vice-secrétaire</option>
				</select><br><br>
			</fieldset>
	<?php
		}
	?>
				<p>*Les éléments précédés de cet astérisques sont obligatoires</p>
			</fieldset>
			<input type=submit value=Envoyer>
		</form>
	</section>
</main>
	<?php
		require "view{$DS}footer.php";
	?>

