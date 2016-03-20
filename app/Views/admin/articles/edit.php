<form method="post">
    <p><label>Tire de l'article</label> :
        <input type="text" name="titre" class="form-control"
               value="<?php echo (isset($article->titre))? $article->titre : ''; ?>"/></p>
    <p><label>Contenu</label> :
       <textarea name="contenu" class="form-control"><?php echo (isset($article->contenu))? $article->contenu : ''; ?></textarea></p>
    <!-- affiche la liste des catégorie dans un menu déroulent      -->
    <!-- récuperer la catégorie enregistrer -->
    <p><label>Catégorie</label> :
        <select name="category_id">
    <?php foreach($categories as $v){ ?>
        <option value="<?= $v->id . ' ' ?>"
            <?php
            if(isset($article->category_id) && $v->id == $article->category_id){
                echo 'selected';
            }
            ?>
        >
            <?= $v->titre ?>
        </option>
    <?php } ?>
    </select></p>
    <!-- ---------------------------------------------------------- -->
    <button class="btn btn-primary">Sauvegarder</button>
</form>