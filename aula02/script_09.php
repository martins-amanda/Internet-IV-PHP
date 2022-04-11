<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1> <br>

    <?php
    //array associativo acessa posições pelas chaves
    $aluno = array('nome' => " Joãozinho" , 'matricula' =>  " 123456",  'curso' => " Anásile e Desenvolvimento de Sistemas", 'turno' => " Vespertino");

   // print_r($aluno);
    foreach ($aluno as $chave => $valor)
    echo "<p> --> $chave:$valor</p>";

    ?>




</body>

</html>