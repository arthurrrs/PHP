<?php
/*
Crie um script que recebe um número e exibe a tabuada de 1 a 10 dele.

*/


if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    
    echo "<h2>Tabuada do $numero:</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
} else {

    
    echo '<form method="post" action="">
            <label for="numero">Digite um número: </label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Exibir Tabuada">
          </form>';

}



?>