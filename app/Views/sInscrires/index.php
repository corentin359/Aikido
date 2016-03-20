<?php foreach ($articles as $article): ?>
    <div class="panel">
            <h2><a href="<?= $article->url ?>"><?= $article->titre; ?></a></h2>
            <p><?= $article->contenu; ?></p>
    </div>
<?php endforeach; ?>