<html>

  <head>
        <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 50%;
 
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;

        }

        tr:nth-child(even) {
          background-color:#0ed8d4;

        }
        div {
         height: 50px;
         display:flex;
         }

        </style>
    </head>

<body>
    <h1></h1> <br>

    <?php
    //array multidimissionais associativos

   // print_r($aluno);
$cursos = array('ADS'=> array(
    "Programação em Microinformática", 
    "Algoritmos e Lógica de Programação",
    "Sistemas de Informação",
    "Arquitetura e Organização de Computadores",
    "Administração Geral",
    "Matemática Discreta",
    "Comunicação e Expressão",
    "Inglês I"), 

'AGRO'=> array(
    "Tecnologia de Produção Animal I ", 
    "Tecnologia de Produção Vegetal I ", 
    "Fundamentos do Agronegócio",
    "Administração Geral",
    "Cálculo",
    "Método para Produção do Conhecimento",
    "Informática Básica",
    "Comunicação e Expressão",
    "Inglês I"),

'LOG'=> array(
    "Projeto Interdisciplinar I ",
     "Logística",
     "Administração Geral",
     "Cálculo I",
     "Informática Aplicada ao Agronegócio",
     "Português",
     "Inglês I"),

'RH'=> array(
    "Gestão das Relações Interpessoais",
    "Administração Geral", 
    "Projeto Integrador I - AAP",
    "Leitura e Produção de Textos",
    "Matemática Elementar",
    "Comportamento Organizacional",
    "Gestão das Relações Interpessoais AAP",
    "Inglês I")
);
     echo "<div>";
    foreach ( $cursos as $sigla => $disciplinas){
    echo "<table>";
    echo "<tr>";
    echo "<th>$sigla</th>";
    echo "</tr>";
        foreach ($disciplinas as $valor){
        echo "<tr>"; //linha
        echo "<td>$valor</td>"; //td coluna
        echo "</tr>";
    }
    echo "</table><br>"; 
    }
     echo"</div>";
    ?>


</body>

</html>