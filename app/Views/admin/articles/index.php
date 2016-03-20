<h1>Administrer les articles</h1>
<p>
    <a href="?p=admin.articles.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Catégorie</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $article): ?>
        <tr>
            <td><?= $article->id; ?></td>
            <td><?= $article->titre; ?></td>
            <td><?= $categories[($article->category_id) - 1]->titre ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.articles.edit&id=<?= $article->id; ?>">Editer</a>
                <form action="?p=admin.articles.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $article->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

