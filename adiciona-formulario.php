<?php
    include("conecta.php");
    include("banco-reembolso.php");
    include("cabecalho.php")
    //reembolso create table 
    //reembolso (id , nome, sobrenome, email, celular, cidade, estado, cep, valor, nf);
?>

<?php
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $valor = $_POST["valor"];
    $nf = $_POST["nf"];

    if(adicionaPedidoReembolso($conexao, $nome, $sobrenome, $email, $celular, $cidade, $estado, $cep, $valor, $nf)){
?> 

        <p class="alert-success">O pedido de reembolso de <?=$nome?>, de nota fiscal: <?=$nf?> foi adicionado com sucesso.</p>

<?php
    }else{
        $msg_erro = mysqli_error($conexao);
?>
        <p class="alert-danger"><strong>Ocorreu um problema com o seu pedido:</strong> <?=$msg_erro?></p>
<?php   
    } 
?>

<a href="formulario-reembolso.php" class="btn btn-primary">Voltar para o formulário</a>

<?php include("rodape.php"); ?>