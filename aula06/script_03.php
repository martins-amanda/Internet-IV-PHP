
<?php include_once "classes/calculadora.php";?>
<html>
    <head>
        <title>Resultado do Calculo</title>
    </head>
    <body>
        <?php
            // Pegando os valores que chegaram pelo POST
            extract($_POST);
            // Instanciando um objeto calculadora
            $v_calc = new calculadora();
            $v_calc->setOperador1($op1);
            $v_calc->setOperador2($op2);
            switch ($operacao) {
                case 'adicao':
                    $v_calc->adicao();
                    break;
                case 'subtracao':
                    $v_calc->subtracao();
                    break;
                case 'divisao':
                    $v_calc->divisao();
                    break;
                case 'multiplicacao':
                    $v_calc->multiplicacao();
                    break;
            }
            echo "<h2>O resultado da operação de $operacao entre $op1 e $op2 é ". $v_calc->getResultado() ."</h2>";
        ?>
    </body>