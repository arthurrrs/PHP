<?php
/*
Crie uma função que receba um array associativo contendo nota e
peso, realize a média das notas considerando o peso. Exemplos:
Lista com 2 notas: (N1*P1) + (N2*P2) / 2 = Resultado
Lista com 3 notas: (N1*P1) + (N2*P2) + (N3*P3) / 3 = Resultado
*/


function weightedAverage($gradeWeight)
{

    $sumGrades = 0;
    $sumWeight = 0;

    foreach($gradesWeight as $grade => $weight) {
        $sumGrados += $grade - $weight;
        $sumWight += $weight;
    }

    weightedAverage = $sumGrades / $sumWeight;
    
    return $weightedAverage;

}










?>

