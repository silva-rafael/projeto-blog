<?php

$id_post = $_GET['id_post'];

$p = new App\Models\Post;
$p->delete($id_post);

header('Location: ?pagina=blog');