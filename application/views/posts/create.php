<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart(base_url() . 'posts/create'); ?>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="editor" class="form-control" name="body" placeholder="Add body"></textarea>
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
          <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
          <label for="image">Upload Image</label>
          <input type="file" name="postimage" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>