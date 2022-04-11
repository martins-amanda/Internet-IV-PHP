<!DOCTYPE html>
<?php
include "classes/imc.php";
?>
<html lang="pt">
<head>
  <title>Cálculo do IMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cálculo do IMC</h2>
  <form name='f1' id='f1' method='post' action="script_01.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="">
    </div>
    <div class="form-group">
      <label for="peso">Peso (Kg):</label>
      <input type="number" step="0.01" class="form-control" id="peso" name="peso" value="" min=1>
    </div>
    <div class="form-group">
      <label for="altura">Altura (m):</label>
      <input type="number" step="0.01" class="form-control" id="altura" name="altura" value="" min=1>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Enviar" />
    </div>
  </form>
  
  <?php
  // Checando se existem valores para o cálculo
    if(isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura']) && $_POST['nome'] != "" && $_POST['peso'] != "" && $_POST['altura'] != ""){
        // Pegando os valores que chegaram pelo POST
        extract($_POST);
        // Sanitizando o nome
        $nome = filter_var($nome,FILTER_SANITIZE_STRING);
        // Instanciando um objeto imc
        $_calculo = new imc($nome, $peso, $altura);
        $_calculo->calcImc();
        echo $_calculo->getResultado();

    }
  ?>
</div>

</body>
</html>
