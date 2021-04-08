<div class="container">
<h2><strong>Envio de imagens</strong></h2><hr>

<form method="POST" enctype="multipart/form-data">
  <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic" accept="image/*" class="form-control">

  <div align="center">
    <button type="submit" class="btn btn-success">Enviar imagem</button>
  </div>
</form>
 
 <hr>
 
 <?php
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = 'img'.date("H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './assets/img/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./assets/img/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
 } ?>