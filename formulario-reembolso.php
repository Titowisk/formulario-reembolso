<?php
    include("cabecalho.php");
    include("banco-estados.php");
?>
<?php
    $listaDeEstados = buscaEstados($conexao);
?>

        <form id="reembolso-form" action="adiciona-formulario.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome-input">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome-input" placeholder="Primeiro nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="sobrenome-input">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome-input" placeholder="Sobrenomes">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email-input">Email</label>
                    <input type="email" class="form-control" name="email" id="email-input" placeholder="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="celular-input">Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular-input" placeholder="celular">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade-input">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade-input">
                </div>
                <div class="form-group col-md-4">
                    <label for="estado-input">Estado</label>
                    <select id="estado-input" name="estado" class="form-control">
                        <?php foreach($listaDeEstados as $estado) : ?>
                        <option><?=$estado["sigla"]?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="cep-input">CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep-input">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="valor-input">Valor</label>
                    <input type="text" class="form-control" name="valor" id="valor-input" placeholder="Ex: 82.56">
                </div>
                <div class="form-group col-md-6">
                    <label for="nf-input">Número da Nota Fiscal</label>
                    <input type="text" class="form-control" name="nf" id="nf-input" placeholder="Ex: 00071083">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

<?php
    include("rodape.php");
?>