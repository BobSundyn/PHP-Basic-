<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página em PHP</title>
    <style>
        table td {
            border: solid 1px #0000ff;
        }
    </style>
</head>

<body>
    <h3>Primeira Página em PHP</h3>

    <p>Esta página é em PHP</p>

    <table>
        <tr>
            <td>ID</td>
            <td>Produto</td>
            <td>Preço</td>
        </tr>
        <?php

        //Tablea de valores vindo do DB 
        $id = 1;
        $produto = "Cadeira Gamer";
        $valor = 800.00;


        for ($i = 1; $i < 5; $i++) {
            echo "<tr>
            <td>$id</td>
            <td>$produto</td>
            <td>$valor</td>
            </tr>";
        }
        ?>

    </table>
    <p>
        <a href="calculo.php">Região</a>
    </p>

    <?php
    //echo "Hello World em PHP";
    ?>

    <p>Depois do código em PHP</p>

    <p>
        <a href="pagina.php">Página HTML em PHP</a>
    </p>

    <p>
        <a href="formulario.php">Formulário em PHP</a>
    </p>
</body>

</html>