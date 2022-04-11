<html>
    <head>
        <title>Dados recebidos do forms via POST</title>
    </head>
    <body>
        <h2>Valores digitados no formulário</h2>
        <h3>E-mail</h3>
        <p>
            <?php 
            //usando o extract 
            extract ($_POST);
            echo $email;
            ?>
        </p>
        <h3>Senha</h3>
        <p>
            <?php
               echo $pwd; 
         
            ?>
        </p>
    </body>
</html>