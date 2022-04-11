

 <html>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>IMC</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style> 
          
      #resultado{
        text-align: center;
      }

    </style>
    </head>
    <body>

        <div class="container">
          <h2>Calculo IMC</h2>
          <form name='form1' id='form1' method='post' action='script_03.php'>
            <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" placeholder="Digite seu nome" name="name">
            </div>
            <div class="form-group">
              <label for="peso">Peso:</label>
              <input type=number  class="form-control" id="peso" placeholder="Digite seu peso" name="peso">
            </div>
            <div class="form-group">
              <label for="altura">Altura:</label>
              <input type=number step=0.01 class="form-control" id="altura" placeholder="Digite sua altura" name="altura">
            </div>
            <button type="submit" class="btn btn-default">Calcular</button>
          </form>
        </div>
       <div class="container" id = "resultado">
            
            <?php
            if(isset($_POST['name'])){
                $_name = $_POST['name'];
                $_name = filter_var($_name,FILTER_SANITIZE_STRING);}
            else{
                $_name = 'Indefinido';}
            if(isset($_POST['peso']))
                $_peso = $_POST['peso'];
            else
                $_peso = 1;
            if(isset($_POST['altura']))
                $_altura = $_POST['altura'];
            else
                $_altura = 1;
    
                //calculo IMC
            $imc = round($_peso/pow($_altura, 2), 1);
            
             echo "<h2>Resultado:  <br><h2>";
                if ($imc <= 18.5)
                    echo "<p>" . $_name . " está abaixo do peso ideal.</p>";
                else if ($imc <= 24.9)
                    echo "<p>" . $_name . " está no peso ideal.</p>";
                else 
                    echo "<p>" . $_name . " está acima do peso ideal.</p>";
                    
                    echo "<p>IMC = $imc <br><p>";
            ?>
        </div>   
    
    </body>
</html>
