<h2><?= $post['title']; ?></h2>
<small class="post-date"><?= $post['created_at']; ?></small> 
<img src="<?= base_url(); ?>static/images/posts/<?= $post['post_image']; ?>">
<br>
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>

<?= form_open(base_url() . 'posts/delete/' . $post['id']); ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
<a href= "<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>" class="btn btn-default">Edit</a>