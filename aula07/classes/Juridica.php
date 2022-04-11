<?php
include "Pessoa.php";
class Juridica extends Pessoa
{
    private $cnpj;
    private $razao_social;

    public function __construct($nome, $telefone, $email, $cnpj, $razao_social)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cnpj = $cnpj;
        $this->razao_social = $razao_social;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }
    public function exibeDados(){
        parent::exibeDados();
        echo "<h2>CNPJ: $this->cnpj</h2>";
        echo "<h2>Razão social: $this->razao_social</h2><br>";
        
    }
}
