<?php
    include("cabecalho.php");
    include("conecta.php");
    include("banco-reembolso.php");
?>
<?php
    $listaDeReembolsos = listaReembolsos($conexao);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Nota Fiscal</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($listaDeReembolsos as $reembolso):
    ?>

    <tr>
      <th scope="row"><?=$reembolso["id"]?></th>
      <td><?=$reembolso["nome"]?></td>
      <td><?=$reembolso["nf"]?></td>
      <td>R$ <?=$reembolso["valor"]?></td>
    </tr>

    <?php
    endforeach
    ?>
    
    
  </tbody>
</table>

<?php
    include("rodape.php");
?>