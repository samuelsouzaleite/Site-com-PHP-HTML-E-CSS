<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        //Acessa o sistema
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Busca o usuário pelo nome (prepared statement, anti SQL Injection).
        // A senha NÃO entra na query: comparamos o hash em PHP com password_verify.
        $sql = "SELECT * FROM cadastro WHERE usuario = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user && password_verify($senha, $user['senha']))
        {
            $_SESSION['usuario'] = $user['usuario'];
            header('location: sistema.php');
        }
        else
        {
            unset($_SESSION['usuario']);
            header('location: login.php');
        }
    }
    else
    {
        //Não acessa e retorna pro login
        header('location: login.php');
    }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Olá jovem</h1>
    </header>
</body>
</html> -->