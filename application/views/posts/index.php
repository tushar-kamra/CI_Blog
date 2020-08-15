<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
    <h3><?= $post['title']; ?></h3>
    <small class="post-date"><?= $post['created_at']; ?></small> <br>
    <?= word_limiter($post['body']); ?>
    <br><br>
    <a class="btn btn-primary btn-sm" href="<?= base_url('posts/' . $post['slug']);?>">Read More</a>
    <br><br>

<?php endforeach; ?>