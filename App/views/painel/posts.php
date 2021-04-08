<?php

$post = new App\Models\Post;
$post->read();

?>

<div class="row container">
    <?php foreach($post->read() as $p): ?>
        <div class="col s12">
            <h2><a href="?pagina=verPost&id_post=<?php echo $p['id_post']; ?>"><?php echo $p['titulo']; ?></a></h2>
            <p><?php echo $p['post']; ?></p>
        </div>
    <?php endforeach; ?>
</div>