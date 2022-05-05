<?php
require_once 'Bebida.php';

class Vinho extends Bebida{

    private $safra;
    private $tipo;

    public function getSafra(){
        return $this->safra;
    }
    public function setSafra($safra){
        $this->safra = $safra;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
}
?>