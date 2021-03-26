<?php
include 'headerPainel.php';
require_once 'App/produtos.php';

$produto = new Produtos;
$produtos = $produto->read();

?>

<div class="container">
<div class="row">
    <h1>Lista de Produtos</h1>
</div>
    <div class="row">
<?php foreach($produtos as $p):?>

        <div style="box-shadow: 2px 2px 4px #777; padding: 20px; min-height: 400px;" class="col-md-4">
            <h3> <a href= "./verProduto.php/?id=<?php echo $p['id']; ?>" >  <?php echo $p['nome']; ?> </a> </h3>
            <a class="btn btn-danger"style="font-size: 20px;" href="/delete.php/?id=<?php echo $p['id']; ?>&img=<?php echo $p['img']; ?>">Deletar</a> |  
            <a class="btn btn-primary"style="font-size: 20px;" href="/atualiza.php/?id=<?php echo $p['id']; ?>&img=<?php echo $p['img']; ?>">Atualiza</a><br>
            <p> <?php echo $p['descricao']; ?> </p>
            <img class="img-fluid" style="max-width:200px; max-height: 200px;"  src="<?php echo $p['img']; ?>" alt="">
        </div>
    
<?php 

endforeach;

?>
    </div>
</div>
<?php include 'footer.php'; ?>