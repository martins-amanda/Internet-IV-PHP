<!DOCTYPE html>
<?php
include "classes/Juridica.php";
?>
<html lang="pt">
<head>
  <title>Trabalhando com herança</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de pessoas jurídicas</h2>
  <form name='f1' id='f1' method='post' action="script_04.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="">
    </div>
    <div class="form-group">
      <label for="fone">Telefone:</label>
      <input type="text" class="form-control" id="fone" name="fone" value="">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" name="email" value="">
    </div>
    <div class="form-group">
      <label for="cnpj">CNPJ:</label>
      <input type="number" class="form-control" id="cnpj" name="cnpj" value="">
    </div>
    <div class="form-group">
      <label for="rzsoc">Razão Social:</label>
      <input type="text" class="form-control" id="rzsoc" name="rzsoc" value="">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Enviar" />
    </div>
  </form>
  
  <?php
  // Checando se existem valores para o cálculo
    if(isset($_POST['nome']) && isset($_POST['fone']) && isset($_POST['email']) && isset($_POST['cnpj']) && isset($_POST['rzsoc']) && $_POST['nome'] != "" && $_POST['fone'] != "" && $_POST['email'] != "" && $_POST['cnpj'] != "" && $_POST['rzsoc'] != ""){
        // Pegando os valores que chegaram pelo POST
        extract($_POST);
        // Sanitizando o nome
		$nome = filter_var($nome,FILTER_SANITIZE_STRING);
		$fone = filter_var($fone,FILTER_SANITIZE_STRING);
		$email = filter_var($email,FILTER_SANITIZE_STRING);
		// Instanciando um objeto fisica
		$_pessoa = new juridica($nome, $fone, $email,$cnpj,$rzsoc);
        echo $_pessoa->exibeDados();
        
    } 

  ?>
</div>

</body>
</html>
