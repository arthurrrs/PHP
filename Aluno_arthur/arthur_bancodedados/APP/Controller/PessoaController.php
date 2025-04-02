<?php

class PessoaController {
    public static function form()  {
        include 'View/modulos/Pessoa/FormPessoa.php';

}

    public static function save() {
        //var_dump($_POST);
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model-> nome = $_POST['nome'];
        $model-> cpf = $_POST['cpf'];
        $model-> data_nascimento = $_POST['data_nascimento'];

        $model->save();
        
        header("Location: /pessoa");
    }


}



?>