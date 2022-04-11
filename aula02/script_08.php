<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1> <br>

<?php
//array associativo
     $disciplinas= array("Algortitmos e lógica de programação", "Linguagem de Programação","Estrutura de Dados", "Banco de Dados", "Segurança da Informação", "Engenharia de Software", "Redes","Gestão de Projetos","Sociedade e Tecnologia" );

    //print_r($disciplinas);

/*
for ($i=0;$i<8;$i++){
    echo "<p>$disciplinas[$i]<p>";
}*/
 $_contador = 1;
   foreach($disciplinas as $_valor){
        echo "<p>Disciplina $_contador: $_valor</p>";
        $_contador++;
   }
?>
    



</body>

</html>