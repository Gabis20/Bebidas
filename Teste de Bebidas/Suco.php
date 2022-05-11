<?php
require_once 'Bebida.php';

class Suco extends Bebida{

    private $sabor;

    public function getSabor(){
        return $this->sabor;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    abstract function mostraBebida(){
        $informacoes = $this->nome + "<br/>" + "<br/>" + $this->preco + 
        "<br/>" + $this->sabor;
        return $informacoes;
    }
    abstract function verificaPreco($preco){
        if($preco < 2,5){
            return 0;
        }
        else{
            return 1;
        }
    }
    }
?>