<html>

    <head>
        <title></title>
    </head>

    <body>
        <h2>Exemplo com a função date_parse()</h2>
            <?php
                $minha_data='2022-03-17 13:30:00';
                //var_dump(date_parse($minha_data)); //var dump imprime tudo e indica o tipo: int, string etc...
                $_arr = date_parse($minha_data);
                foreach ($_arr as $chave => $valor){
                echo "$chave: $valor <br>";
                }
            ?>
        <h2>Exemplo com a função getdate()</h2>
            <?php
            $_timestamp = time();
            //exibe informações de data e hora atuais 
            $_arr = getdate($_timestamp);
            foreach ($_arr as $chave => $valor){
                echo "$chave: $valor <br>";
            }
            ?>
    </body>

</html>