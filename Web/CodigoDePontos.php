<?php

include_once "Empresa.php";
include_once "Strategy.php";

class CodigoDePontos{

    private $codigo;
    private $dataGeracao;
    private $empresa;
    private $validado = false;
    private $pontos;

    function __construct($empresa, $valor, $arb, $data, $strategy) {
        $this->empresa = $empresa;
        $dataGeracao = $data;
        
        switch ($strategy) {
            case 'ponto':
                $this->pontos = $this->pontoValor($valor);
                break;
            
            case 'compra':
                $this->pontos = $this->pontoCompra();
                break;

            case 'arbitrario':
                $this->pontos = $this->pontoArbitrario($valor, $arb);
                break;

            default:
                break;
        }

        $this->gerarCodigo();
    }


    public function getCodigo() {
        return $this->codigo;
    }

    public function getValidado() {
        return $this->validado;
    }

    public function getPontos() {
        return $this->pontos;
    }

    public function setValidado() {
        if($this->validado){
            return;
        }
        else{
            $this->validado = true;
        }
        return;
    }

    private function gerarCodigo() {
        // intervalo para números - 48 - 57
        // intervalo A-Z            65 - 90
        // intervalo a-z            97 - 122

        for($i = 0; $i<10 ; $i++){
            $num = mt_rand(48, 122);
            
            while($num < 48 || ($num > 57 && $num < 65) || ($num > 90 && $num < 97) || $num > 122){
                $num = mt_rand(48, 122);
            }

            $this->codigo .= chr($num);
        }
    }

    function pontoCompra() {
        return 1;
    }

    function pontoArbitrario($v, $arb) {
        $p = (int)($v / $arb);
        return $p;
    }

    function pontoValor($v) {
        return (int)$v;
    }
}
