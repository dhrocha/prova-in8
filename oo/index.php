<?php

/**
 * Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e 
 * um método que multiplique as 3 retornando o produto. Deixe um exemplo de utilização 
 * da sua classe no final do código.
 */

require 'Numbers.class.php';

$Numbers = new Numbers();

$Numbers->setNum1(2);
$Numbers->setNum2(3);
$Numbers->setNum3(5);

echo "Numeros setados: <br>1: " . $Numbers->getNum1() . "<br> 2: " . $Numbers->getNum2() . "<br> 3: " . $Numbers->getNum3() . "<br>";
echo "Total: " . $Numbers->multiplicar();
