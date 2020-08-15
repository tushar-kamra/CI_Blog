<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open(base_url() . 'posts/update'); ?>
    <input type="hidden" name="id" value="<?= $post['id']; ?>">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add title" value="<?= $post['title']; ?>">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="editor" class="form-control" name="body" placeholder="Add body"><?= $post['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>