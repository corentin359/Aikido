<form method="post">
    <p><label>Tire de la catégorie</label> :
        <input type="text" name="titre" class="form-control"
               value="<?php echo (isset($category->titre))? $category->titre : ''; ?>"/></p>
    <button class="btn btn-primary">Sauvegarder</button>
</form>