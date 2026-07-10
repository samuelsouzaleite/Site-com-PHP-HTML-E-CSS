<?php
    if(!empty($_GET['id']))
    {
      

        include_once('config.php');

        $id = $_GET['id'];

        // Prepared statement: id vem separado do SQL (anti SQL Injection).
        $sqlselect = "SELECT * FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($sqlselect);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
            $user_data = $result->fetch_assoc();
            $nome = $user_data['nome'];
            $idade = $user_data['idade'];
            $usuario = $user_data['usuario'];
            $cpf = $user_data['cpf'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $data_nasc = $user_data['data_nasc'];
            $estado = $user_data['estado'];
            $cidade = $user_data['cidade'];
        }
    }
    else
    {
        header('location: sistema.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-cadastro.css">
    <title>Cadastro</title> 
</head>
<body>
    <header class="cabecalho">
        <a class="volta" href="sistema.php">Voltar</a>
        <h1 class="cabecalho-titulo">Cadastro</h1>
    </header>
    <main>
        <form class="formulario" action="saveEdit.php" method="POST">
            <fieldset> 
                <div class="div-formulario" >
                    <input class="input-form" type="text" name="nome" value="<?php echo $nome ?>" required></input>
                    <label for="nome">Nome Completo</label>
                </div>
                
                <div class="div-formulario" >
                    <input class="input-form" type="number" name="idade" value="<?php echo $idade ?>" required></input>
                    <label for="idade">Idade</label>
                </div>

                <div class="div-formulario" >
                    <input class="input-form" type="text" name="usuario" value="<?php echo $usuario ?>" required></input>
                    <label for="usuario">Usuário</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="password" name="senha" placeholder="deixe em branco para manter a atual"></input>
                    <label for ="senha">Nova senha</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="cpf" value="<?php echo $cpf ?>" required></input>    
                    <label for ="cpf">CPF</label>
                </div>

                <div  class="div-formulario">
                    <input class="input-form" type="email" name="email" value="<?php echo $email ?>"></input>
                    <label for="email">E-mail</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="tel" name="telefone" value="<?php echo $telefone ?>"></input>
                    <label for ="telefone">Telefone</label>
                </div>

                <div class="div-formulario">
                    <p>Gênero:</p>
                    <input type = "radio" id = "feminino" name = "genero" value="feminino" <?php echo ($genero == 'feminino') ? 'checked' : '' ?> required>
                    <label for = "feminino">Feminino</label>
                </div>

                <div class="div-formulario">
                    <input type = "radio" id = "masculino" name = "genero" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : '' ?> required>
                    <label for = "masculino">Masculino</label>
                </div>

                <div class="div-formulario">
                    <input type = "radio" id = "outro" name = "genero" value="outro" <?php echo ($genero == 'outro') ? 'checked' : '' ?> required>
                    <label for = "outro">Outro</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="date" name="data_nasc" value="<?php echo $data_nasc ?>">
                    <label for="data">Data de Nascimento</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="estado" value="<?php echo $estado ?>">
                    <label for="estado">Estado</label>
                </div>

                <div class="div-formulario">
                    <input class="input-form" type="text" name="cidade" value="<?php echo $cidade ?>">
                    <label for="Cidade">Cidade</label>
                </div> 
                <div class="btn">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="input-btn " type="submit" name="update" id="update"></input>
                </div>
            </fieldset> 
              
        </form>
    </main>
</body>
</html>