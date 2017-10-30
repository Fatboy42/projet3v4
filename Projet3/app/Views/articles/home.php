<h1>Les 5 derniers articles :</h1>

<?php foreach ($posts as $post): ?>

<h1><a href="<?= $post->Url ?>"><?= $post->titre; ?></a></h1>

<p><?= $post->extrait; ?></p>

<?php endforeach; ?>
