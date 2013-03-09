<?php

require_once "Carro.php";

Class Caminhao extends Carro {

    protected $eixos;

    public function  __construct($marca, $modelo, $cor, $ano, $eixos) {

        parent::__construct($marca, $modelo, $cor, $ano);
        $this->setEixos($eixos);

    }

    public function setEixos($eixos){
        $this->eixos = $eixos;
    }

    public function getEixos(){
        return $this->eixos;
    }

    public function  __toString() {
        $output = parent::__toString();
        $output .= "<b>Eixos:</b>   {$this->getEixos()} <br>";

        return  $output;
    }

}
