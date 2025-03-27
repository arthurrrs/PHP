<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

   
    if ($usuario == "admin" && $senha == "123") {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha incorretos!";
    }
}



?>


