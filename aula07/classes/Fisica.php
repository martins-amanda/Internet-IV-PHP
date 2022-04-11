<?php
include "Pessoa.php";
class Fisica extends Pessoa
{
    private $cpf;
    private $data_nascimento;

    public function __construct($nome, $telefone, $email, $cpf, $data_nascimento)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }
    public function exibeDados(){
        parent::exibeDados();
        echo "<h2>CPF: $this->cpf</h2>";
        echo "<h2>Data de nascimento: $this->data_nascimento</h2>";
    }
}
