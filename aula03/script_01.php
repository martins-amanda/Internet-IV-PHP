<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <?php
    $_cursos = array('ADS' => array("Programação em Microinformática", "Algoritmos e Lógica de Programação", "Sistemas de Informação", "Arquitetura e Organização de Computadores", "Administração Geral", "Matemática Discreta", "Comunicação e Expressão", "Inglês I"), 
    'AGRO' => array("Tecnologia de Produção Animal", "Tecnologia de Produção Vegetal", "Fundamentos do Agronegócio", "Administração Geral", "Cálculo", "Informática Aplicada ao Agronegócio", "Português", "Inglês I"), 
    'LOG' => array("Projeto Interdisciplinar I", "Logística", "Administração Geral", "Cálculo I", "Método para Produção do Conhecimento", "Informática Básica", "Comunicação e Expressão", "Inglês I"), 
    'RH' => array("Gestão das Relações Interpessoais", "Administração Geral", "Projeto Integrador I - AAP", "Leitura e Produção de Textos", "Matemática Elementar", "Comportamento Organizacional", "Gestão das Relações Interpessoais AAP", "Inglês I"));

    /*
    foreach($_cursos as $_sigla => $_disciplinas){
        echo "<table>";
        echo "<tr>";
        echo "<th>$_sigla</th>";
        echo "</tr>";
        foreach($_disciplinas as $_valor){
            echo "<tr>";
            echo "<td>$_valor</td>";
            echo "</tr>";
        }
        echo "</table><br>";
    }
     */
    $matricula = 123;
    $_cursos2 = array('ADS', 'AGRO', 'LOG', 'RH');
    //each
    $meu_curso1 = each($_cursos2);
    print_r($meu_curso1);
    echo "<br>";
    $meu_curso1 = each($_cursos2);
    print_r($meu_curso1);
    //ternario
    echo is_array($_cursos2) ? "É um array" : "Não é um array";
    echo "<br>";
    echo is_array($matricula) ? "É um array" : "Não é um array";
    echo "<br>";
    //count
    echo 'o array cursos tem '.count($_cursos).' elementos';


    ?>

</body>

</html>