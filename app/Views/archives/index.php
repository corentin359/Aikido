    <div class="col-sm-8">
        <h1>Archive</h1>
        <?php foreach ($articles as $article): ?>
            <h2>
                <a href="<?= $article->url ?>" target="_blank">
                    <?= $article->titre; ?>
                </a>
            </h2>
            <p><em><?= $article->categorie; ?></em></p>
            <p><?= $article->extrait; ?></p>
        <?php endforeach; ?>
    </div>
