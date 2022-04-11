<?php
    class IMC{

        // Propriedades
        private $nome;
        private $altura;
        private $peso;
        private $resultado;

        // Métodos
        public function getNome(){
            return $this->nome;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getResultado(){
            return $this->resultado;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function setResultado($resultado){
            $this->resultado = $resultado;
        }
        public function imc(){
            if ( $this->altura != 0){
                $this->resultado =round ($this->peso / ($this->altura * $this->altura),2) ;
            }
            
        }
      
    
}

?>