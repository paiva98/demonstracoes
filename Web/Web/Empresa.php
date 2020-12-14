<?php

class Empresa{
    function __construct($n, $e, $CPF, $CNPJ, $end, $s, $l, $rs){
        $this->nome = $n;
        $this->email = $e;
        $this->endereco = $end;
        $this->senha = $s;
        $this->cpf = $CPF;
        $this->cnpj = $CNPJ;
        $this->logo = $l;
    }

    private $nome, $email, $cpf = "", $cnpj = "", $endereco, $senha, $logo, $telefone;
    private $pontoCompra = false, $pontoGasto = false, $inadinplemte;
    private $pontoArbitrario=0;

    public function getNome(){
        return $this->nome;
    }

    public function getInadimplente(){
        return $this->inadinplemte;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function getCNPJ(){
        return $this->cnpj;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getTelefone(){
        return $this->telefone;
    }

}