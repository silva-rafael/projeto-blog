<?php 


$id_post = $_GET['id_post'];

$p = new App\Models\Post;
$p->postUnico($id_post);

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3> <?php echo $p->titulo; ?></h3>
            <p> <?php echo $p->post; ?> </p>
        </div>
    </div>
</div>
