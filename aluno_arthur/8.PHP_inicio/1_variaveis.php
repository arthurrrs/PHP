<?php
/*
Declare as variáveis $nome, $idade, $altura e $casado com valores fictícios.
Exiba os valores usando echo.
Exiba o tipo de cada variável
*/

$nome = "Arthur";           
$idade = 21;              
$altura = 1.78;           
$casado = true;           


echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";
echo "Casado: ". ($casado ? "Sim" : "Não").
"<br>";
echo"<br>";
var_dump($nome, $idade, $altura, $casado)


?>