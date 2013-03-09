<?php
class CarWrite {

    public  function  write(Carro $car){
        $output  = $car->getmarca()   .   "<br>";
        $output .= $car->getmodelo()  .   "<br>";
        $output .= $car->getcor()     .   "<br>";
        $output .= $car->getano()     .   "<br>";

        echo $output;
    }
}
