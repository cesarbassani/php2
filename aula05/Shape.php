<?php

require_once 'IShape.php';

abstract class Shape implements IShape {

    protected $x, $y;

    function setCenter($x, $y)
            {

                $this->x = $x;
                $this->y = $y;
                
    }

    abstract function draw();


}