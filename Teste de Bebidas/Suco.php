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