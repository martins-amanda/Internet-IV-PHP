<?php
    if(isset($_POST['name']))
        $_name = $_POST['name'];
    else
        $_name = 'Indefinido';
?>
 
<html>
    <head>
        <title>Teste com formulário</title>
    </head>
    <body>
        <form name='f1' id='f1' method='post' action='script_02.php'>
            <p>Digite o nome: <input type='text' name='name' id='name' /></p>
            <input type='submit' value='Enviar' />
        </form>
        <?php
            echo $_name;
        ?>
    </body>
</html>