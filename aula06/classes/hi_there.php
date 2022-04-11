<?php 
    class hi_there{
        //propriedades 
        private $mensagem;

        //metodos  ~~ public em php também é função -> public function
        public function getMensagem(){
            return $this->mensagem;
        } 

        public function setMensagem($valor){
             $this->mensagem = $valor;
              
        } 
    }
?>