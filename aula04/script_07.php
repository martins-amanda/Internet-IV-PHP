<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Meu segundo formulário</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
          <h2>Calculadora Simples</h2>
          <form name='form1' id='form1' method='post' action='script_08.php'>
            <div class="form-group">
              <label for="op1">Operador 1:</label>
              <input type="number" class="form-control" id="op1" placeholder="Digite o valor do operador 1" name="op1">
            </div>
            <div class="form-group">
              <label for="op2">Operador 2:</label>
              <input type="number" class="form-control" id="op2" placeholder="Digite o valor do operador 2" name="op2">
            </div>
            <div class="radio">
              <label><input type="radio" name="operacao" id="operacao" value='adicao'>Adição </label>
              <label><input type="radio" name="operacao" id="operacao" value='subtracao'> Subtração </label>
              <label><input type="radio" name="operacao" id="operacao" value='multiplicacao'> Multiplicação </label>
              <label><input type="radio" name="operacao" id="operacao" value='divisao'> Divisão </label>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>

    </body>
</html>