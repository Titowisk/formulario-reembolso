<?php
    include("conecta.php");
?>
<?php 
    function buscaEstados($conexao) {
        $listaDeEstados = array();
        $query = "select * from estados";
        $resultado = mysqli_query($conexao, $query);

        while ($estado = mysqli_fetch_assoc($resultado)){
            
            array_push($listaDeEstados, $estado);

        }

        return $listaDeEstados;
    }
?>