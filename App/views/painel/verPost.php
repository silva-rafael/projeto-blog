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
            <a class="btn btn-large" href="?pagina=editar&id_post=<?php echo $id_post; ?>">Editar</a>
            <a class="btn btn-large orange" href="?pagina=delete&id_post=<?php echo $id_post; ?>">Deletar</a>
        </div>
    </div>
</div>

    

