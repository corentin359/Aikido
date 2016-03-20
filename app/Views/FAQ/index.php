<?php foreach ($posts as $post): ?>
    <div class="panel">
        <div class="col-9 col-sm-9 col-lg-6">
            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>
            <p><?= $post->contenu; ?></p>
        </div><!--/span-->
    </div>
<?php endforeach; ?>