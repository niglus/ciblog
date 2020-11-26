<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']?></h3>
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?>">
        </div>
        <div class="col-md-9">
            <small class="post-date">Dibuat tanggal <?php echo $post['created_at']; ?> Kategori: <strong><?php echo $post['name']; ?></strong></small><br>
                <?= word_limiter($post['body'], 50);?>

                <br><br>
                <p>
                    <a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']); ?>">Read More</a>
                </p>
        </div>
    </div>
<?php endforeach; ?>