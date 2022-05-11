<?php
require_once 'Bebida.php';

class Refrigerante extends Bebida{

    private $retornavel;

    public function getRetornavel(){
        return $this->retornavel;
    }
    public function setSafra($retornavel){
        $this->retornavel = $retornavel;
    }
    abstract function mostraBebida(){
        $informacoes = $this->nome + "<br/>" + $this->preco + 
        "<br/>." ;
        return $informacoes;
    }
    abstract function verificaPreco($preco){
        if($preco < 5){
            return 0;
        }
        else{
            return 1;
        }
    }
    }
?>