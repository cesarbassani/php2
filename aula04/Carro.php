<?php

class Carro {
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    
    public static $fabricados = 0;

    const VERMELHO  = "#FF0000";
    const BRANCO    = "FFFFFF";
    const PRETO     = "000000";

    public function  __construct($marca, $modelo, $cor, $ano) {
        
        self::$fabricados += 1;

        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
    }

    public function __destruct(){
        self::$fabricados -= 1;
    }

    public function  __toString() {
        $output =   "
                    <b>Marca:</b>      {$this->getMarca()}     <br>
                    <b>Modelo:</b>     {$this->getModelo()}    <br>
                    <b>Cor:</b>        {$this->getCor()}       <br>
                    <b>Ano:</b>        {$this->getAno()}       <br>
                    ";

        return $output;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        if( ! is_int($ano)){
            die("Ano deve ser inteiro");
        }

        $this->ano = $ano;
    }
 
}

?>
