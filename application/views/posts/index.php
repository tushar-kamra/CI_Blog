<h2><?= $title ?></h2>

<?php foreach($posts as $post): ?>
    <h3><?= $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?= base_url(); ?>static/images/posts/<?= $post['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date"><?= $post['created_at']; ?> in <strong><?= $post['name']; ?></strong></small> <br>
            <?= word_limiter($post['body']); ?>
            <br><br>
            <a class="btn btn-primary btn-sm" href="<?= base_url('posts/' . $post['slug']);?>">Read More</a>
            <br><br>
        </div>
    </div>

<?php endforeach; ?>

<div class="pagination-links">
    <?= $this->pagination->create_links(); ?>
</div>