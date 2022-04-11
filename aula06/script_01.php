<!DOCTYPE html>
<?php
include "classes/hi_there.php";
?>
<html>
    <head>
        <title>PHP OO</title>
    </head>
    <body>
        <H1>Minha Primeira Classe em PHP</H1>
        <?php
            // Criando o objeto minha_mensagem
            $minha_mensagem = new hi_there();
            $minha_mensagem->setMensagem('hi there ;)');
            echo $minha_mensagem->getMensagem();
        ?>