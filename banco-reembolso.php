<?php
    function adicionaPedidoReembolso($conexao, $nome, $sobrenome, $email, $celular, $cidade, $estado, $cep, $valor, $nf) {
        $query = "insert into reembolso (nome, sobrenome, email, celular, cidade, estado, cep, valor, nf)
        values ('{$nome}', '{$sobrenome}', '{$email}', '{$celular}', '{$cidade}', '{$estado}', '{$cep}', {$valor}, '{$nf}')";

        return mysqli_query($conexao, $query);
    }

    function listaReembolsos($conexao){
        $listaDeReembolsos = array();
        $query = "select * from reembolso";
        $resultado = mysqli_query($conexao, $query);

        while($pedido = mysqli_fetch_assoc($resultado)){
            
            array_push($listaDeReembolsos, $pedido);

        }
        return $listaDeReembolsos;
    }
?>