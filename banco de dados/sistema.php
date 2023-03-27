<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: login.php');
    }
    $logado = $_SESSION['usuario'];

    $sql = "SELECT * FROM cadastro ORDER BY id DESC";

    $result = $conexao->query($sql);

    // print_r($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-sistema.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>SSL | Sistema</title>
</head>
<body>
    <header>
        <?php
            echo "<h3>Bem vindo, $logado</h3>";  
        ?>    
        <a href="sair.php" class="btn-sair">SAIR</a>    
    </header>
    <br>
    <main>
        <table class="tabela">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Usuário</th>
                    <th>Senha</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Gênero</th>
                    <th>Data de Nascimento</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['idade']."</td>";
                    echo "<td>".$user_data['usuario']."</td>";
                    echo "<td>".$user_data['senha']."</td>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['genero']."</td>";
                    echo "<td>".$user_data['data_nasc']."</td>";
                    echo "<td>".$user_data['estado']."</td>";
                    echo "<td>".$user_data['cidade']."</td>";
                    echo "<td><a href='edit.php?id=$user_data[id]'><i class='bx bx-edit'></i></a></td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'><i class='bx bx-message-alt-x'></i></a></td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </main>
</body>
    
</html>