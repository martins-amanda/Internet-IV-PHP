<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1> <br>

<?php
    $disciplinas[8] = "Algortitmos e lógica de programação";
    $disciplinas[7] = "Linguagem de Programação";
    $disciplinas[6] = "Estrutura de Dados";
    $disciplinas[5] = "Banco de Dados";
    $disciplinas[4] = "Segurança da Informação";
    $disciplinas[3] = "Engenharia de Software";
    $disciplinas[2] = "Redes";
    $disciplinas[1] = "Gestão de Projetos";
    $disciplinas[0] = "Sociedade e Tecnologia";
    print_r($disciplinas);

for ($i=0;$i<8;$i++){
    echo "<p>$disciplinas[$i]<p>";
}

?>
    



</body>

</html>