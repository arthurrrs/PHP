<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);




switch ($url) {
    case '/':
        echo "Página inicial -😍";
        break;
    case '/pessoa':
        echo "Listar Pessoas -👦🏻";
        break;
        
    break;
    case '/pessoa/form':
        PessoaController::form();

    break;
    case '/pessoa/form/save':
        PessoaController::save();
        
    
    default:
       echo "erro 404";
        break;
}


?>