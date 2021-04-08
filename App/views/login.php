<?php
session_start();

if(isset($_POST['enviar'])):

    $_SESSION['user'] = $_POST['user'];
    
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
   
    $u = new App\Models\User;
    $u->login($user, $pass);

    if($u->retorno === 1):
        header("Location: ?pagina=painel");
    endif;

endif;


?>

<div class="row container">
    <form action="" method="POST">
        Nome: <input type="text" name="user"><br>
        Senha: <input type="password" name="pass"><br>
        <button name="enviar">Enviar</button>
    </form>
</div>
