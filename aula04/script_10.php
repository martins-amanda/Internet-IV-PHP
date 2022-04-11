<html>
    <head>
        <title>Saudação</title>
    </head>
    <body>	

		<?php
			$data=date("d/m/Y",time());
			$hora = date('H', time());
			//$horario = date('H:i:s', time() - 3*60*60);
			if ($hora  < 12)
				echo "<h2>Bom dia!</h2>";
			else if ($hora <19)
				echo "<h2>Boa tarde!</h2>";
			else 
				echo "<h2>Boa noite! </h2>";
				
		echo "<h2> Hoje é dia $data </h2>";
		?>               
    </body>
</html>