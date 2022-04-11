<?php
    class imc{
        private $nome;
        private $peso;
        private $altura;
        private $indice;
        private $resultado;
  
        public function __construct($nome, $peso, $altura){
            $this->nome = $nome;
            $this->peso = $peso;
            $this->altura = $altura;
        }
        public function setNome($nome){
            $this->nome = $nome;
          
        }
        
        public function setPeso($peso){
            $this->peso = $peso;
        }
        
        public function setAltura($altura){
            $this->altura = $altura;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getResultado(){
            return $this->resultado;
        }
        
        public function getIndice(){
            return $this->indice;
        }
        
        public function calcImc(){
            $this->indice = $this->peso / ($this->altura * $this->altura);
            $this->calculaResultado();
        }
        
        private function calculaResultado(){
            // Checando as condições do peso
            if ($this->indice < 20) 
                $this->resultado = "<h2>Olá $this->nome!</h2>"."<h2>Você está abaixo do peso ideal.</h2>";
            elseif ($this->indice < 25)
                $this->resultado = "<h2>Olá $this->nome!</h2>"."<h2>Você se encontra no pesso ideal.</h2>";
            else
                $this->resultado = "<h2>Olá $this->nome!</h2>"."<h2>Você está acima do peso ideal.</h2>";
        }
    }
