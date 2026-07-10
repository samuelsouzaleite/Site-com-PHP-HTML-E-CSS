<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $usuario = $_POST['usuario'];
        // Guarda apenas o hash da senha, nunca o texto puro.
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        // Campo DATE em branco vira NULL para não quebrar em modo estrito.
        $data_nasc = !empty($_POST['data_nasc']) ? $_POST['data_nasc'] : null;
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        // Prepared statement: os valores são enviados separados do SQL,
        // então não há como o usuário injetar comandos (anti SQL Injection).
        $sql = "INSERT INTO cadastro (nome, idade, usuario, senha, cpf, email, telefone, genero, data_nasc, estado, cidade)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('sisssssssss', $nome, $idade, $usuario, $senha, $cpf, $email, $telefone, $genero, $data_nasc, $estado, $cidade);
        $stmt->execute();
        $stmt->close();

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-cadastro.css">
    <title>Cadastro</title> 
</head>
<body>
    <header class="cabecalho">
        <a class="volta" href="home.php">Voltar</a>
        <h1 class="cabecalho-titulo">Cadastro</h1>
    </header>
    <main>
        <form class="formulario" action="cadastro.php" method="POST">
            <fieldset> 
                <div class="div-formulario" >
                    <input class="input-form" type="text" name="nome" required></input>
                    <label for="nome">Nome Completo</label>
                </div>
                
                <div class="div-formulario" >
                    <input class="input-form" type="number" name="idade" required></input>
                    <label for="idade">Idade</label>
                </div>

                <div class="div-formulario" >
                    <input class="input-form" type="text" name="usuario" required></input>
                    <label for="usuario">Usuário</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="password" name="senha"  required></input>    
                    <label for ="senha">Senha</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="cpf"  required></input>    
                    <label for ="cpf">CPF</label>
                </div>

                <div  class="div-formulario">
                    <input class="input-form" type="email" name="email"></input>
                    <label for="email">E-mail</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="tel" name="telefone"></input>
                    <label for ="telefone">Telefone</label>
                </div>

                <div class="div-formulario">
                    <p>Gênero:</p>
                    <input type = "radio" id = "feminino" name = "genero" value ="Feminino" required>
                    <label for = "feminino">Feminino</label>
                </div>

                <div class="div-formulario">
                    <input type = "radio" id = "masculino" name = "genero" value = "masculino" required>
                    <label for = "masculino">Masculino</label>
                </div>

                <div class="div-formulario">
                    <input type = "radio" id = "outro" name = "genero" value = "outro" required>
                    <label for = "outro">Outro</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="date" name="data_nasc">
                    <label for="data">Data de Nascimento</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="estado">
                    <label for="estado">Estado</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="cidade">
                    <label for="Cidade">Cidade</label>
                </div> 
                <div class="btn">
                    <input class="input-btn " type="submit" name="submit" value="cadastrar"></input>
                </div>
            </fieldset> 
              
        </form>
    </main>
</body>
</html>