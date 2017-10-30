
<h1>Tous les articles :</h1>

<?php foreach ($all as $post): ?>

<h1><a href="<?= $post->Url ?>"><?= $post->titre; ?></a></h1>

<p><?= $post->extrait; ?></p>

<?php endforeach; ?>
