<?php
// Guarda o nome do formulário ativo

if (isset($_POST['formCadastro'])) {
   cadastrarContato();
} elseif (isset($_POST['formCalculo'])) {
    calcularMedia();
} else {
    echo "Página Inválida";
    //header("Location: index.php");
    ?>
    <meta http-equiv="refresh" content="2; url=index.php">
    <?php
}

// Cadastro de Contato
function cadastrarContato()
{
    // Busca os dados informados no formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    echo "Nome: $nome $sobrenome <br>";
    echo "Idade: " . $idade;
    // Não precisa fechar o PHP quando for somente código PHP
}

// Cálculo da Média
function calcularMedia()
{
    $nota1 = $_POST('num1');
    $nota2 = $_POST('num2');
    $nota3 = $_POST('num3');

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "A média é $media";
}




