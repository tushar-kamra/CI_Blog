<h2><?= $title; ?></h2>
<ul class="list-group">
    <?php foreach($categories as $category): ?>
        <li class="list-group-item">
            <a href="<?= base_url('/categories/posts/' . $category['id']); ?>"><?= $category['name']; ?></a>
            <?php if($this->session->userdata('user_id') == $category['user_id']) { ?>
                <form class="cat-delete" action="categories/delete/<?= $category['id']; ?>" method="post">
                    <input type="submit" class="btn-link text-danger" value="[x]">
                </form>
            <?php } ?>
        </li>
    <?php endforeach; ?> 
</ul>