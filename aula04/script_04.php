<html>
    <head>
        <title>Dados recebidos do forms via POST</title>
    </head>
    <body>
        <h2>Valores digitados no formulário</h2>
        <h3>E-mail</h3>
        <p>
            <?php 
             $_email = $_POST['email'];
            echo $_email;
            ?>
        </p>
        <h3>Senha</h3>
        <p>
            <?php
            $_senha = $_POST['pwd'];
            echo $_senha;
         
            ?>
        </p>
    </body>
</html>