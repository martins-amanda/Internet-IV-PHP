<?php
  // Função que soma 2 números e retorna o resultado
  function fc_soma($_n1,$_n2){
      echo "A soma de $_n1 com $_n2 é igual a ", $_n1 + $_n2;
  }
  // Função que subtrai 2 números e retorna o resultado
  function fc_subtrai($_n1,$_n2){
        echo "A subtração de $_n1 por $_n2 é igual a ", $_n1 - $_n2;
  }
  // Função que multiplica 2 números e retorna o resultado
  function fc_multiplica($_n1,$_n2){
      echo "A multiplicação de $_n1 por $_n2 é igual a ", $_n1 * $_n2;
  }
  // Função que divide 2 números e retorna o resultado
   function fc_divide($_n1,$_n2){
      if ($_n2 == 0)
        echo "Não é possível dividir $_n1 por zero.";
      else
        echo "A divisão de $_n1 por $_n2 é igual a ", $_n1 / $_n2;
  }
?>