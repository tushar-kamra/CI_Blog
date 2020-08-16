<h2><?= $post['title']; ?></h2>
<small class="post-date"><?= $post['created_at']; ?></small> 
<img src="<?= base_url(); ?>static/images/posts/<?= $post['post_image']; ?>">
<br>
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>

<a href= "<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>" class="btn btn-secondary float-left">Edit</a>
<?= form_open(base_url() . 'posts/delete/' . $post['id']); ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<hr>

<h3>Comments</h3>
<?php if($comments) { ?>
    <div class="list-group">
    <?php foreach($comments as $comment): ?>
        <div class="list-group-item active">
            <h5><?= $comment['body']; ?> [by <strong><?= $comment['name']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
    </div>
<?php } else { ?>
    <p>No comments to display.</p>
<?php } ?>

<hr>

<h3>Add Comments</h3>
<?= validation_errors(); ?>
<?= form_open('comments/create/' . $post['id']); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?= $post['slug']; ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>