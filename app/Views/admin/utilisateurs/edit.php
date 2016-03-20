<form method="post">
    <p><label>Login de l'utilisateur</label> :
        <input type="text" name="login" class="form-control"
               value="<?php echo (isset($utilisateur->login))? $utilisateur->login : ''; ?>"/></p>
    <p><label>Mot de passe</label> :
        <input type="password" name="motDePasse" class="form-control"
               value="<?php echo (isset($utilisateur->motDePasse))? $utilisateur->motDePasse : ''; ?>"/></p>
    <p><label>Numero de licence</label> :
        <input type="number" name="numeroLicence" class="form-control"
               value="<?php echo (isset($utilisateur->numeroLicence))? $utilisateur->numeroLicence : ''; ?>"/></p>
    <p><label>Date de Naissance</label> :
        <input type="date" name="dateNaissance" class="form-control"
               value="<?php echo (isset($utilisateur->dateNaissance))? $utilisateur->dateNaissance : ''; ?>"/></p>

    <p><label>Grade</label> :
        <select name="grade">
            <?php for ($i = 6; $i > 1; $i--) { ?>
                <option value="<?= $i ?>ème KYU"
                <?= (isset($utilisateur->grade))?(($utilisateur->grade == $i . 'ème KYU')? 'selected' : '') : ''; ?>
                ><?= $i ?>ème KYU</option>
            <?php } ?>
            <option value="1er KYU"
                <?= (isset($utilisateur->grade))?(($utilisateur->grade == '1er KYU')? 'selected' : '') : ''; ?>
            >1er KYU</option>
            <option value="1er DAN"
            <?= (isset($utilisateur->grade))?(($utilisateur->grade == '1er DAN')? 'selected' : '') : ''; ?>
            ">1er DAN</option>
            <?php for ($i = 2; $i < 11; $i++) { ?>
                <option value="<?= $i ?>ème DAN"
                <?= (isset($utilisateur->grade))?(($utilisateur->grade == $i . 'ème DAN')? 'selected' : '') : ''; ?>
                "><?= $i ?>ème DAN</option>
            <?php } ?>
        </select>
    <p><label>certificat medical</label> :</br>
        Oui : <input type="radio" name="certificatMedical" value="Oui"
            <?php
                if(isset($utilisateur->certificatMedical)){
                echo ($utilisateur->certificatMedical == 'Oui')? 'checked' : '';
                }
            ?>
        ></br>
        Non : <input type="radio" name="certificatMedical" value="Non"
            <?php
            if(isset($utilisateur->certificatMedical)){
                echo ($utilisateur->certificatMedical == 'Non')? 'checked' : '';
            }
            ?>
        ></br></p>
    <p><label>Role dans l'association</label> :
       <select name="role">
           <option value="Eleve"
               <?= (isset($utilisateur->role))?(($utilisateur->role == 'Eleve')? 'selected' : '') : ''; ?>
           >Eleve</option>
           <option value="Enseignant"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Enseignant')? 'selected' : '') : ''; ?>
            ">Enseignant</option>
           <option value="Président"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Président')? 'selected' : '') : ''; ?>
            >Président</option>
           <option value="Vice-présidentrésident"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Vice-présidentrésident' )? 'selected' : '') : ''; ?>
            >Vice-président</option>
           <option value="Trésorier"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Trésorier')? 'selected' : '') : ''; ?>
            >Trésorier</option>
           <option value="Vice_trésorier"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Vice_trésorier')? 'selected' : '') : ''; ?>
            >Vice_trésorier</option>
           <option value="Secrétaire"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Secrétaire')? 'selected' : '') : ''; ?>
            >secrétaire</option>
           <option value="Vice-secrétaire"
           <?= (isset($utilisateur->role))?(($utilisateur->role == 'Vice-secrétaire' )? 'selected' : '') : ''; ?>
            >Vice-secrétaire</option>
       </select>


    <!-- affiche la liste des diférent contacte(4) personne a contacter en ca de probleme -->
    <p><label>Contacte</label> :
        <select name="idContacte">
    <?php foreach($informationsPersonnelle as $v){ ?>
        <option value="<?= $v->id . ' ' ?>"
                <?php
                    if(isset($utilisateur->id) && $v->id == $utilisateur->id){
                        echo 'selected';
                    }
                ?>
        >
            <?= $v->id . ' ' . $v->nom . ' ' . $v->prenom ?>
        </option>
    <?php } ?>
    </select></p>
    <!-- ------------------------------------------------------------------------- -->

    <button class="btn btn-primary">Sauvegarder</button>
</form>