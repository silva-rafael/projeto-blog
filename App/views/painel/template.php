<!DOCTYPE html>
<html lang="pt">
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
                <a href="?pagina=inserir">Inserir</a>
            </li>
            <li>
                <a href="?pagina=sair">Sair</a>
            </li>
        </ul>
    </div>
</nav>
<?php

$pagina = $_GET['pagina'];

switch($pagina){

    case 'sair':
        require 'logout.php';
        break;
    case 'inserir':
        require 'inserir.php';
        break;
    case 'verPost':
        require 'verPost.php';
        break;
    case 'editar':
        require 'editar.php';
        break;
    case 'delete':
        require 'delete.php';
        break;
        case 'posts':
            require 'delete.php';
            break;
    
    default:
         require 'painel.php';
         break;
}


?>


    
</body>
</html>