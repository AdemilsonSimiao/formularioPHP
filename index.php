<?php
    include_once './php/conectDb.php';
    include_once './php/bdPHP.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./js/pesquisaCEP.js"></script>
    <script src="./js/ValidaCPF.js"></script>
    <title>Formulario PHP</title>
</head>
<body>
    <form action="" method="POST" id="form">
        <input type="hidden" id="id-atualizar" value="">
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="" required>
        <label for="Sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
        <label for="CPF">CPF:</label>
        <input type="text" name="cpf" id="cpf" mask="" placeholder="000.000.000-00" class="is-invalid" maxlength="14" value="" onblur="ValidarCPF(this.value);">
        <label for="E-mail">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="teste@teste.com" >
        <label for="Telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
        <label for="CEP">CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="00000-000" maxlength="9" value="" onblur="pesquisa(this.value,);" required>
        <label for="Endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" required>
        <label for="Numero">Numero:</label>
        <input type="text" name="numero" id="numero" placeholder="Numero" required>
        <label for="Complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento" placeholder="Complemento" >
        <label for="Bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" placeholder="Bairro" required>
        <label for="Cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
        <label for="Estado">Estado:</label>
        <input type="text" name="estado" id="estado" placeholder="Estado" required>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
    <div class="listagem">
        <table>
            <h1>Listagem de contatos</h1>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody id="t-body"></tbody>
        </table>
    </div>
 <script src="./js/script.js"></script>
</body>
</html>