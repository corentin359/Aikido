<?php require ROOT . '/app/Views/menu.php';?>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="list-group">
        <a href="#" class="list-group-item active">Menu administrateur</a>
        <a href="index.php?p=admin.articles.index&club=<?= App::getClub() ?>" class="list-group-item">Administrer les articles</a>
        <a href="index.php?p=admin.categories.index&club=<?= App::getClub() ?>" class="list-group-item">Administrer les categories</a>
        <a href="index.php?p=admin.utilisateurs.index&club=<?= App::getClub() ?>" class="list-group-item">Administrer les utilisateurs</a>
        <a href="index.php?p=admin.informationsPersonnelles.index&club=<?= App::getClub() ?>" class="list-group-item">Administrer les contacts</a>
        <a href="#" class="list-group-item">mail groupé</a>
    </div>
</div><!--/span-->