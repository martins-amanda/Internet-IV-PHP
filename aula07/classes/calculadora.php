<?php
    class calculadora{
        // Propriedades
       protected $operador1;
       protected $operador2;
       protected $resultado;


        
    public function __construct($operador1,$operador2)
    {
    
        $this->operador1 = $operador1;
        $this->operador2 = $operador2;


    }
        // Métodos
        public function getOperador1(){
            return $this->operador1;
        }
        public function getOperador2(){
            return $this->operador2;
        }
        public function getResultado(){
            return $this->resultado;
        }
        public function setOperador1($valor){
            $this->operador1 = $valor;
        }
        public function setOperador2($valor){
            $this->operador2 = $valor;
        }
        public function setResultado($valor){
            $this->resultado = $valor;
        }
        public function adicao(){
            $this->resultado = $this->operador1 + $this->operador2;
        }
        public function subtracao(){
            $this->resultado = $this->operador1 - $this->operador2;
        }
        public function multiplicacao(){
            $this->resultado = $this->operador1 * $this->operador2;
        }
        public function divisao(){
            $this->resultado = $this->operador1 / $this->operador2;
        }
        public function quadrado(){
            $this->resultado = $this->operador2 * $this->operador2;
        }
     
    }

?>