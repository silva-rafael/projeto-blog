<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>Document</title>
</head>
<body>
<nav class="red">
    <div class="container">
        <ul class="right">
            <li>
                <a href="?pagina=blog">Home</a>
            </li>
            <li>
                <a href="?pagina=inserir">Inserir</a>
            </li>
            <li>
                <a href="?pagina=login">Login</a>
            </li>
        </ul>
    </div>
</nav>
<?php

$pagina = $_GET['pagina'];

switch($pagina){

    case 'login':
        require 'App/views/login.php';
        break;
    case 'inserir':
        require 'App/views/inserir.php';
        break;
    case 'verPost':
        require 'App/views/verPost.php';
        break;
    case 'editar':
        require 'App/views/editar.php';
        break;
    case 'delete':
        require 'App/views/delete.php';
        break;
    
    default:
         require 'App/views/blog.php';
         break;
}


?>


    
</body>
</html>