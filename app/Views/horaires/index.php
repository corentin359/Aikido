<?php foreach ($articles as $article): ?>
    <div class="panel">
        <div class="col-9 col-sm-9 col-lg-6">
            <h2><a href="<?= $article->url ?>"><?= $article->titre; ?></a></h2>
            <p><?= $article->contenu; ?></p>
        </div><!--/span-->
    </div>
<?php endforeach; ?>