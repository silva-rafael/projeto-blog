<?php
session_start();

if(!isset($_SESSION['user'])):
    header("Location: /");
endif;

?>

<h2>Painel</h2>
<p>Este é o seu painel administrativo. Aqui vc poderá fazer a inclusão e exclusão dos seus posts, e 
também a edição deles.</p>
<a class="btn btn-large" href="?pagina=posts">Ver todos os posts</a>