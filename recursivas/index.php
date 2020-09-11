<?php

/**
 * Crie uma função recursiva para descobrir o menor número inteiro divisível 
 * por 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.
 */

function divisble($arrNum, $control = 0, $num = 1)
{
    $size = sizeof($arrNum);

    if ($control == $size) {
        $numeros = implode(", ", $arrNum);
        echo " O menor numero divisivel por $numeros é " . $num;
    } else {
        if ($num % $arrNum[$control] == 0) {
            divisble($arrNum, $control + 1, $num);
        } else {
            divisble($arrNum, 0, $num + 1);
        }
    }
}

divisble([2, 3, 10]);
