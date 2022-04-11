<!DOCTYPE html>
<html>

<head>
    <style>
    </style>
</head>

<body>

    <?php
    $_cursos = array('RH','ADS','LOG','AGRO');
    $_pontos = array(10,23,8,19,1,15);

    //imprimimndo conteudo de cursos com each
    print_r (each($_cursos));
    echo "<br>";
    print_r (each($_cursos));
    echo "<br>";
    print_r (each($_cursos));
    echo "<br>";
    print_r (each($_cursos));
    echo "<br>";

    //imprimimndo conteudo de pontos com each
    print_r (each( $_pontos));
    echo "<br>";
    print_r (each( $_pontos));
    echo "<br>";
    print_r (each( $_pontos));
    echo "<br>";
    print_r (each( $_pontos));
    echo "<br>";
    print_r (each( $_pontos));
    echo "<br>";

    // testando variaveis para ver se é um array com operadr ternario
    echo is_array($_cursos) ? "É um array" : "Não é um array";
    echo "<br>";
    echo is_array($_cursos) ? "É um array" : "Não é um array";
    echo "<br>";
    echo is_array($lalala) ? "É um array" : "Não é um array"; //lala não existe
    echo "<br>";
    //count
    echo "<br> o array cursos tem ".(count($_cursos))." elementos </br>" ; // conta só o primeiro nivel, primeira dimensão 
    echo "<br> o array Pontos tem ".(count($_pontos))." elementos </br>" ; 

    //ordenando os arrays com sort
    sort($_cursos);
    sort($_pontos);
    print_r ($_cursos);
    echo "<br>";
    print_r  ($_pontos);
    echo "<br>";

    //ordenando os arrays inversamente com rsort
    echo "<br>";
    rsort($_cursos); 
    rsort($_pontos);
    print_r ($_cursos);
    echo "<br>";
    print_r  ($_pontos);
    echo "<br>";
    
    //ordenando os arrays aletoriamente com shuffle
    echo "<br>";
    shuffle($_cursos); 
    shuffle($_pontos);
    print_r ($_cursos);
    echo "<br>";
    print_r  ($_pontos);
    echo "<br>";

    //IMPLODE: converte array em string para mostrar na tela
    sort($_cursos);
    $m_cursos= implode(', ',$_cursos);
    echo "<br> $m_cursos";
    sort($_pontos);
    $m_pontos= implode(', ',$_pontos);
    echo "<br> $m_pontos";
    echo "<br>";

    //EXPLODE: convertestring em array para mostrar na tela
    echo "<br>";
    $str = "Fatec Mogi das Cruzes";
    $arr_str = explode(' ', $str);
    foreach ($arr_str as $valor)
    echo "$valor <br>";
    echo "<br> O array possui ".(count($arr_str))." elementos </br>" ;

    ?>

</body>

</html>