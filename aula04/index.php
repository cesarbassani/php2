<?php
 ini_set('display_errors','on');

 require_once "Carro.php";
 require_once "Caminhao.php";

 $gol = new Carro("Wolkswagen","Gol G4 Power", Carro::BRANCO, 2013);
 $uno = new Carro("Fiat", "Uno Way", Carro::PRETO, 2010);
 $palio = new Carro("Fiat", "Palio Economy", Carro::VERMELHO, 2011);
 $volvo = new Caminhao("Volvo", "Volvo 123", Carro::PRETO, 2010, 8);


 echo "<p>Existem ". Carro::$fabricados . " carros criados</p>";

 echo "<p>$gol</p>";
 echo "<p>$uno</p>";
 echo "<p>$palio</p>";
 echo "<p>$volvo</p>";
 


