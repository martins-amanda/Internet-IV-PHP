<html>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Meu primeiro formulário</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
          <h2>Cadastro de Clientes</h2>
          <form name='form1' id='form1' method='post' action='script_04.php'>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pwd">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>

    </body>
</html>