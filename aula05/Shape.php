<?php

abstract class Shape {

    protected $x, $y;

    function setCenter($x, $y)
            {

                $this->x = $x;
                $this->y = $y;
                
    }

    abstract function draw();


}