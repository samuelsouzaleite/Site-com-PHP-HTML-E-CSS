<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['idade']);
        // print_r('<br>');
        // print_r($_POST['usuario']);
        // print_r('<br>');
        // print_r($_POST['senha']);
        // print_r('<br>');
        // print_r($_POST['cpf']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['telefone']);
        // print_r('<br>');
        // print_r($_POST['genero']);
        // print_r('<br>');
        // print_r($_POST['data']);
        // print_r('<br>');
        // print_r($_POST['estado']);
        // print_r('<br>');
        // print_r($_POST['cidade']);

        include_once('config.php');

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
        
        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,idade,usuario,senha,cpf,email,telefone,genero,data_nasc,estado,cidade) 
        VALUES('$nome','$idade', '$usuario','$senha', '$cpf', '$email','$telefone','$genero','$data_nasc','$estado','$cidade')");

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