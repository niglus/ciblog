<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']?></h3>
    <small class="post-date">Dibuat tanggal <?php echo $post['created_at']; ?> Kategori: <strong><?php echo $post['name']; ?></strong></small><br>
    <?= word_limiter($post['body'], 50);?>

    <br><br>
    <p>
        <a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']); ?>">Read More</a>
    </p>
<?php endforeach; ?>