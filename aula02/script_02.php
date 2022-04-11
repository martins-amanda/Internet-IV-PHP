<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1> <br>

<?php
    $disciplinas[] = "Algortitmos e lógica de programação";
    $disciplinas[] = "Linguagem de Programação";
    $disciplinas[] = "Estrutura de Dados";
    $disciplinas[] = "Banco de Dados";
    $disciplinas[] = "Segurança da Informação";
    $disciplinas[] = "Engenharia de Software";
    $disciplinas[] = "Redes";
    $disciplinas[] = "Gestão de Projetos";
    $disciplinas[] = "Sociedade e Tecnologia";
    print_r($disciplinas);

for ($i=0;$i<8;$i++){
    echo "<p>$disciplinas[$i]<p>";
}

?>
    



</body>

</html>