<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        //Acessa o sistema
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Usuario: ' . $usuario);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM cadastro WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao ->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) <1 )
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location: sistema.php');
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