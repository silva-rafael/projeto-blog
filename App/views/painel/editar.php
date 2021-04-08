<?php

$id_post =  $_GET['id_post'];

if(isset($_POST['enviar'])):

    $id_post =  $_GET['id_post'];
    $titulo = $_POST['titulo'];
    $post = $_POST['post'];
    

    $p = new App\Models\Post;
    $p->editar($titulo, $post, $id_post);     

endif;

$p = new App\Models\Post;
$p->postUnico($id_post);

?>


<div class="container">
    <div class="row">
        <div class="col s6">
            <form action="" method="post">
                <label for="">Titulo</label>
                <input  type="text" name="titulo" value="<?php echo $p->titulo; ?>"></br>
                <label for="">Titulo</label>
                <textarea class="materialize-textarea" name="post"><?php echo $p->post; ?></textarea></br>
                <button class="btn btn-success" name="enviar">Enviar</button>
                <a href="?pagina=blog" class="btn btn-secondary">Voltar</a>
            </form>
            
        </div>
    </div>
</div>
