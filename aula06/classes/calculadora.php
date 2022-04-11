<?php
    class calculadora{
        // Propriedades
        private $operador1;
        private $operador2;
        private $resultado;

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
            if ( $this->operador2 != 0){
            $this->resultado = $this->operador1 / $this->operador2;
            }
            else{
                 $this->resultado = "INVÁLIDO";
            }
        }
    }

?>