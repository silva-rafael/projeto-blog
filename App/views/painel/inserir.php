<?php

if(isset($_POST['enviar'])):
    $titulo = $_POST['titulo'];
    $post = $_POST['post'];

    $p = new App\Models\Post;
    $p->inserir($titulo, $post);

endif;
?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-group" action="" method="post">
                Titulo: <input class="form-control" type="text" name="titulo"></br>
                Post: <input class="form-control" type="text" name="post"></br>
                <button class="btn btn-large red darker-4" name="enviar">Enviar</button>
                <a class="btn btn-large" href="?pagina=blog">Home</a>
            </form>
            
        </div>
    </div>
</div>