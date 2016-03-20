<h1>Administrer les contacts</h1>
<p><a href="?p=admin.informationsPersonnelles.add" class="btn btn-success">Ajouter</a></p>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Sexe</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse e-mail</td>
        <td>Ville</td>
        <td>Rue</td>
        <td>Code postal</td>
        <td>Télephone</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($items as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->sexe; ?></td>
            <td><?= $user->nom; ?></td>
            <td><?= $user->prenom; ?></td>
            <td><?= $user->adresseEMail; ?></td>
            <td><?= $user->ville; ?></td>
            <td><?= $user->rue; ?></td>
            <td><?= $user->codePostal; ?></td>
            <td><?= $user->telephone; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.informationsPersonnelles.edit&id=<?= $user->id; ?>">Editer</a>
                <form action="?p=admin.informationsPersonnelles.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>