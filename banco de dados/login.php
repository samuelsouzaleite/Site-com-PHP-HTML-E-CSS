<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Login</title>
</head>
<body>
    <header>
        <a class="volta" href="home.php">Voltar</a>
    </header>
    <main class="conteudo">
        <form class="area-login" action="testeLogin.php" method="POST">
            <h2 class="titulo-login">Login</h2>
            <div class="conteudo-login">
                <input class="input" type="text" name="usuario" required >
                <label  class="label">Usuário</label>
            </div>
            <div class="conteudo-login">
                <input class="input"type="password" name="senha" id="Senha" required>
                <label class="label">Senha</label>
            </div>
            <div>
                <input class="btn-login" type="submit" name="submit" value="Enviar">
            </div> 
            <p class="link-paragrafo">Não tem uma conta? <a class="link-paragrafo" id="link" href="cadastro.php">Cadastre-se</a></p>    
        </form>
    </main>
</body>
</html>