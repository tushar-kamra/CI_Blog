<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open(base_url() . 'posts/create'); ?>
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
      <select name="category" class="form-control">
        <?php foreach($categories as $category): ?>
          <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>