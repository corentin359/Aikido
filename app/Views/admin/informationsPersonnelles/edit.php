<form method="post">
    <p><label>Sexe</label> :</br>
        Homme : <input type="radio" name="sexe" value="H"
            <?php
                if(isset($informationsPersonnelle->sexe)){
                echo ($informationsPersonnelle->sexe == 'H')? 'checked' : '';
                }
            ?>
        ></br>
        Femme : <input type="radio" name="sexe" value="F"
            <?php
            if(isset($informationsPersonnelle->sexe)){
                echo ($informationsPersonnelle->sexe == 'F')? 'checked' : '';
            }
            ?>
        ></br></p>
    <p><label>Nom</label> :
        <input type="text" name="nom" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->nom))? $informationsPersonnelle->nom : ''; ?>"/></p>
    <p><label>Prenom</label> :
        <input type="text" name="prenom" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->prenom))? $informationsPersonnelle->prenom : ''; ?>"/></p>
    <p><label>Adresse e-mail</label> :
        <input type="email" name="adresseEMail" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->adresseEMail))? $informationsPersonnelle->adresseEMail : ''; ?>"/></p>
    <p><label>Ville</label> :
        <input type="text" name="ville" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->ville))? $informationsPersonnelle->ville : ''; ?>"/></p>
    <p><label>Rue</label> :
        <input type="text" name="rue" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->rue))? $informationsPersonnelle->rue : ''; ?>"/></p>
    <p><label>Code postal</label> :
        <input type="text" name="codePostal" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->codePostal))? $informationsPersonnelle->codePostal : ''; ?>"/></p>
    <p><label>Téléphone</label> :
        <input type="tel" name="telephone" class="form-control"
               value="<?php echo (isset($informationsPersonnelle->telephone))? $informationsPersonnelle->telephone : ''; ?>"/></p>
    <button class="btn btn-primary">Sauvegarder</button>
</form>