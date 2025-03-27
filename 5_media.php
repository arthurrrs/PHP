<?php

/* Crie uma função que receba 2 números e retorne um array
associativo contendo a média e também um indicador booleano de
aprovado/reprovado. Considere aprovado com média >= 6.
*/


function toCalcAverage($grade1, $grade2) {
    $average = ($grade1 + $grade2) / 2;
    return [
        'average' => $average,
        'approved' => $average >= 6
    ];
}

$student1 = toCalcAverage(8,5);

echo "Score: {$student1['average']} <br>";
echo "Status: ". ($student1['approved'] ? "Approved" : "Reproved;");




?>