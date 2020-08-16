<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('users/register'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="zipcode">Zip-code</label>
        <input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="name">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
