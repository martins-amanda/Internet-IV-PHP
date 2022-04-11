<?php
//Função que soma 2 numeros e retorna o resultado
function fc_soma($_n1, $_n2)
{
    return $_n1 + $_n2;
}
//Função que subtrai 2 numeros e retorna o resultado
function fc_subtrai($_n1, $_n2)
{
    return $_n1 - $_n2;
}
//Função que multiplica 2 numeros e retorna o resultado
function fc_multiplica($_n1, $_n2)
{
    return $_n1 * $_n2;
}
//Função que divide 2 numeros e retorna o resultado
function fc_divide($_n1, $_n2)
{
    return $_n1 / $_n2;
}
?>
<html>

<head>
    <title>Calculadora 5</title>
</head>

<body>
    <h1>Somando 2 Números</h1><br>

    <?php
    $_num1 = 10;
    $_num2 = 2;
    $_resultado = fc_soma($_num1, $_num2);

    echo "O resultado da soma de $_num1 com $_num2 é igual a: $_resultado";
    echo "<br>";
    ?>

    <h1>Subtraindo 2 Números</h1><br>

    <?php
    $_num1 = 10;
    $_num2 = 2;
    $_resultado = fc_subtrai($_num1, $_num2);

    echo "O resultado da subtração de $_num1 por $_num2 é igual a: $_resultado";
    echo "<br>";
    ?>
    <h1>Multiplicando 2 Números</h1><br>

    <?php
    $_num1 = 10;
    $_num2 = 2;
    $_resultado = fc_multiplica($_num1, $_num2);

    echo "O resultado da multiplicação de $_num1 por $_num2 é igual a: $_resultado";
    echo "<br>";
    ?>
    <h1>Dividindo 2 Números</h1><br>

    <?php
    $_num1 = 10;
    $_num2 = 2;
    $_resultado = fc_divide($_num1, $_num2);

    echo "O resultado da divisão de $_num1 por $_num2 é igual a: $_resultado";
    echo "<br>";
    ?>
</body>

</html>