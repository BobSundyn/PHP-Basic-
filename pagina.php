<?php
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página HTML em PHP</title>
</head>
<body>
    <h3>Página HTML em PHP</h3>
</body>
</html>';
?>

<?php $nome1 = "Marnei Cardoso";
$nome2 = "Gabriel Brum"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página HTML em PHP</title>
</head>
<body>
    <h3>Página HTML em PHP</h3>

    <p>Bem-Vindo professor <?php echo $nome1; ?> </p>

    <p>Bem-Vindo colega <?= $nome2; ?></p>
    <!-- Forma encurtada de mostrar mensagem com echo -->
</body>
</html>

