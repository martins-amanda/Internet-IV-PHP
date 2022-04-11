<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1> <br>

    <?php
    //array multidimissionais associativos
    $products = array(
        'paper' => array(
            'copier'=>"Copier & Multipupose",
            'inkjet'=> "sjlsdjasd",
            'laser'=> "djsakldja",
            'photo'=> "sdkjasldjas",
        ),
        'pens' => array(
            'ball'=> "dkjlasdjasl",
            'hilite'=> "sdkjlsdka",
            'marker'=> "askdjaslkd",
        ),
        'misc' => array(
            'tape'=> "dkasdjas",
            'glue'=> "djalsdasda",
            'clips'=> "dkasdjalsd",
        )
        );
   // print_r($aluno);
    foreach ($products as $section => $itens)
    foreach ($itens as $chave => $valor)
    echo "<p> --> $section:\t$chave\t$valor<br></p>";

    ?>




</body>

</html>