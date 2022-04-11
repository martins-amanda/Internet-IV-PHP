<?php
include "calucadora.php";
    class imc extends calculadora{
        private $nome;
        private $mensagem;
		
		public function __construct($nome, $peso, $altura){
			$this->nome = $nome;
			$this->operador1 = $peso;
			$this->operador2 = $altura;
		}
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getResultado(){
            return $this->resultado;
        }

        public function getMensagem(){
            return $this->mensagem;
        }

        
        
        public function calcImc(){
            parent::quadrado();  //na classe é justamente op2*op2 
            parent::divisao(); // na classe é op1/op2
            $this->calculaResultado();
        }
        
        private function calculaResultado(){
            // Checando as condições do peso
            if ($this->resultado < 20) 
                $this->mensagem = "<h2>Olá $this->nome!</h2>"."<h2>Você está abaixo do peso ideal.</h2>";
            elseif ($this->indice < 25)
                $this->mensagem = "<h2>Olá $this->nome!</h2>"."<h2>Você se encontra no pesso ideal.</h2>";
            else
                $this->mensagem = "<h2>Olá $this->nome!</h2>"."<h2>Você está acima do peso ideal.</h2>";
        }
    }
?>