<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
</head>

<body>
    <h3>Formulário em PHP</h3>

    <p>Cadastro de Contao</p>

    <!-- Action == para onde vai enviar os dados -->
    <form action="confirmaCadastro.php" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </p>

        <p>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome">
        </p>

        <p>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade">
        </p>

        <p>
            <button type="submit" name="formCadastro">Cadastrar</button>
            <button type="reset">Limpar</button>
        </p>

        <hr>
        
        <form action="confirmaCadastro.php" method="POST">
            <p>
                <label for="nota1">Nota 1:</label>
                <input type="number" id="nota1" name="nota1">
            </p>

            <p>
                <label for="nota2">Nota 2:</label>
                <input type="number" id="nota2" name="nota2">
            </p>

            <p>
                <label for="nota3">Nota 3:</label>
                <input type="number" id="nota3" name="nota3">
            </p>

            <p>
                <button type="submit" name="formCadastro">Cadastrar</button>
                <button type="reset">Limpar</button>
            </p>
        </form>
</body>

</html>