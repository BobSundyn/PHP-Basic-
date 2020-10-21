<?php
// Comentário em linha

/* Comentário em bloco */

// Variáveis em PHP (Sempre deve ter o $)
/*$num1;
$num2 = 3;
$soma = "Texto";

// Atribui valor
$num1 = 5;

$soma = $num1 + $num2;

echo "Resultado: " . $soma;
// Concatenação em PHP é com . (ponto)

$soma = "String";
echo " <p> Tipo da variável soma: " . $soma . "</p>";

// Calculo da Média
$num1 = 6;
$num2 = 6;
$num3 = 6;

$media = ($num1 + $num2 + $num3) / 3;

echo "A média é: " . $media;

// Verifica a média
if ($media >= 6) {
    echo "<br>Aprovado";
} elseif ($media >= 3 && $media < 6){
    echo "<br>Exame";
} else {
    echo "<br>Reprovado";
}

// em PHP o elseif deve ser escrito sem espaço
// else if << funciona porém não é o recomendado
// elseif << recomendado */

// Switch Case

// Sul = 1,  Sudeste = 2, Centro-Oeste = 3, Norte = 4, Nordeste = 5
$regiao = 1;

switch ($regiao) { // Só aceita valores inteiros e letras

    case 1;
        echo "Sul";
        break;

    case 2;
        echo "Sudeste";
        break;    

    case 3;
        echo "Centro-Oeste";
        break;

    case 4;
        echo "Norte";
        break;

    case 5;
        echo "Nordeste";
        break;

    default;
        echo "Informe um valor entre 1 e 5";
}
?>