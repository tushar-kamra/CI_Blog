<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>