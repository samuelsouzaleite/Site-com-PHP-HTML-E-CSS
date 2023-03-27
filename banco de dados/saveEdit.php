<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        $sqlupdate = "UPDATE cadastro SET nome = '$nome', idade = '$idade', usuario = '$usuario', senha = '$senha', cpf = '$cpf', email = '$email', telefone = '$telefone', genero = '$genero', data_nasc = '$data_nasc', estado = '$estado', cidade = '$cidade'
        WHERE  id='$id' ";

        $result = $conexao->query($sqlupdate);
    }

    header('location: sistema.php');

?>