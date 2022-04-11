

<?php 
include 'classes/imc.php';
?>
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
          <form name='form1' id='form1' method='post' action='script_04.php'>
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="name" placeholder="Digite seu nome" name="nome">
            </div>
            <div class="form-group">
              <label for="peso">Peso:</label>
              <input type=number  class="form-control" id="peso" placeholder="Digite seu peso" name="peso" value =" " min="1">
            </div>
            <div class="form-group">
              <label for="altura">Altura:</label>
              <input type=number step=0.01 class="form-control" id="altura" placeholder="Digite sua altura" name="altura" value =" " min="1">
            </div>
            <button type="submit" class="btn btn-default">Calcular</button>
          </form>
        </div>
       <div class="container" id = "resultado">
            
            <?php
              extract($_POST);
              // Instanciando um objeto imc

              if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
                $nome = filter_var($nome,FILTER_SANITIZE_STRING);}
            else{
                $nome = 'Indefinido';}
            if(isset($_POST['peso']))
                $peso = $_POST['peso'];
            else
                $peso = 1;
            if(isset($_POST['altura']))
                $altura = $_POST['altura'];
            else
                $altura = 1;
    
              $v_calc = new IMC();
              $v_calc->setnome($nome);
              $v_calc->setAltura($altura);
              $v_calc->setPeso($peso);
    
                //calculo IMC
           $v_calc->imc($peso,$altura);
            
             echo "<h2>Resultado:  <br><h2>";
                if ( $v_calc->getResultado() <= 18.5)
                    echo "<p>" .$v_calc->getNome() . " está abaixo do peso ideal.</p>";
                else if ($v_calc->getResultado()<= 24.9)
                    echo "<p>" .$v_calc-> getNome(). " está no peso ideal.</p>";
                else 
                    echo "<p>" .$v_calc->getNome() . " está acima do peso ideal.</p>";
                    
                    echo "<p>IMC =" .$v_calc->getResultado()."<br><p>";
            ?>
        </div>   
    
    </body>
</html>
