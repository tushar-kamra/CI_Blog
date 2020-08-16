<html>
    <head>
        <title>CI-Blog</title>
        <link rel="stylesheet" href="<?= base_url(); ?>static/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>static/css/style.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= base_url(); ?>">CI-Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>categories">Categories</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>users/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>posts/create">Create Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>categories/create">Create Category</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <!-- Flash message -->
            <?php if($this->session->flashdata('user_registered')){ ?>
                <?= "<div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <p>" . $this->session->flashdata('user_registered') . "</p>
                    </div>" ?>
            <?php } ?>

            <?php if($this->session->flashdata('post_created')){ ?>
                <?= "<div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <p>" . $this->session->flashdata('post_created') . "</p>
                    </div>" ?>
            <?php } ?>

            <?php if($this->session->flashdata('post_updated')){ ?>
                <?= "<div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <p>" . $this->session->flashdata('post_updated') . "</p>
                    </div>" ?>
            <?php } ?>

            <?php if($this->session->flashdata('category_created')){ ?>
                <?= "<div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <p>" . $this->session->flashdata('category_created') . "</p>
                    </div>" ?>
            <?php } ?>

            <?php if($this->session->flashdata('post_deleted')){ ?>
                <?= "<div class=\"alert alert-dismissible alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                        <p>" . $this->session->flashdata('post_deleted') . "</p>
                    </div>" ?>
            <?php } ?>
