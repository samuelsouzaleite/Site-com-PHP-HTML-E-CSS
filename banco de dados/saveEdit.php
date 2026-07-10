<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $usuario = $_POST['usuario'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = !empty($_POST['data_nasc']) ? $_POST['data_nasc'] : null;
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        if(!empty($_POST['senha']))
        {
            // Uma nova senha foi digitada: salva o hash dela.
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $sqlupdate = "UPDATE cadastro SET nome = ?, idade = ?, usuario = ?, senha = ?, cpf = ?, email = ?, telefone = ?, genero = ?, data_nasc = ?, estado = ?, cidade = ? WHERE id = ?";
            $stmt = $conexao->prepare($sqlupdate);
            $stmt->bind_param('sisssssssssi', $nome, $idade, $usuario, $senha, $cpf, $email, $telefone, $genero, $data_nasc, $estado, $cidade, $id);
        }
        else
        {
            // Campo em branco: mantém a senha atual (não atualiza a coluna senha).
            $sqlupdate = "UPDATE cadastro SET nome = ?, idade = ?, usuario = ?, cpf = ?, email = ?, telefone = ?, genero = ?, data_nasc = ?, estado = ?, cidade = ? WHERE id = ?";
            $stmt = $conexao->prepare($sqlupdate);
            $stmt->bind_param('sissssssssi', $nome, $idade, $usuario, $cpf, $email, $telefone, $genero, $data_nasc, $estado, $cidade, $id);
        }

        $stmt->execute();
        $stmt->close();
    }

    header('location: sistema.php');

?>