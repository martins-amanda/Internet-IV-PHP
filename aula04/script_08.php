<?php include_once "funcoes.php";?>
<html>
    <head>
        <title>Resultado do Calculo</title>
    </head>
    <body>
        <?php
            extract($_POST);
            switch ($operacao) {
                case 'adicao':
                    $resultado = fc_soma($op1,$op2);
                    break;
                case 'subtracao':
                    $resultado = fc_subtrai($op1,$op2);
                    break;
                case 'divisao':
                    $resultado = fc_divide($op1,$op2);
                    break;
                case 'multiplicacao':
                    $resultado = fc_multiplica($op1,$op2);
                    break;
            }
            echo "<h2>O resultado da operação de $operacao entre $op1 e $op2 é $resultado.</h2>";
        ?>
    </body>