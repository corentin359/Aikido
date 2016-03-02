
	<?php
		require "view{$DS}header.php";
	?>   
<main>
	<section>
		<h2>AJOUTER UN UTILISATEUR</h2>
		<form method=post action="index.php?controller=utilisateur&action=ajouterUtilisateur&club=<?php echo "$club";?>">
			<fieldset>
				<legend>Quelle type d'utilisateur voulez vous créer</legend>
				<label for=formation>type d'utilisateur</label>
				<select name=ajouterUtilisateur id=ajouterUtilisateur class=info>
				<option value="ÉLÈVE ENFANTS"> Élève enfants</option>
				<option value="ÉLÈVE ADULTE"> Élève adulte</option>
				<option value="PARENT"> Parent</option>
                <option value="ENSEIGNANT"> Enseignant</option>
                <option value="MEMBRE DU BUREAU"> Membre du bureau</option>
				</select></br></br>
			<input type=submit value=Envoyer>
			</fieldset>
		</form>
	</section>
	<section>
		<h2>MODIFIER UN UTILISATEUR</h2>
		<form method=post action="index.php?controller=utilisateur&action=modifierUtilisateur&club=<?php echo "$club";?>">
			<fieldset>
				<legend>Quelle type d'utilisateur voulez vous créer</legend>
				<label for=formation>type d'utilisateur</label>
				<select name=modifierUtilisateur id=modifierUtilisateur class=info>
				<option value="ÉLÈVE ENFANTS"> Élève enfants</option>
				<option value="ÉLÈVE ADULTE"> Élève adulte</option>
				<option value="PARENT"> Parent</option>
                <option value="ENSEIGNANT"> Enseignant</option>
                <option value="MEMBRE DU BUREAU"> Membre du bureau</option>
				</select></br></br>
			<input type=submit value=Envoyer>
			</fieldset>
		</form>
	</section>
	<section>
		<h2>SUPPRIMER UN UTILISATEUR</h2>
		<form method=post action="index.php?controller=utilisateur&action=supprimerUtilisateur&club=<?php echo "$club";?>">
			<fieldset>
				<legend>Quelle type d'utilisateur voulez vous créer</legend>
				<label for=formation>type d'utilisateur</label>
				<select name=supprimerUtilisateur id=supprimerUtilisateur class=info>
				<option value="ÉLÈVE ENFANTS"> Élève enfants</option>
				<option value="ÉLÈVE ADULTE"> Élève adulte</option>
				<option value="PARENT"> Parent</option>
                <option value="ENSEIGNANT"> Enseignant</option>
                <option value="MEMBRE DU BUREAU"> Membre du bureau</option>
				</select></br></br>
			<input type=submit value=Envoyer>
			</fieldset>
		</form>
	</section>
</main>
	<?php
		require "view{$DS}footer.php";
	?>

