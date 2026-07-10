# Sistema de Cadastro e Login — PHP + MySQL

Aplicação web de **cadastro, autenticação e gerenciamento de usuários** (CRUD completo),
feita com **PHP puro** e **MySQL**, sem frameworks. Projeto de estudo criado para
aprender os fundamentos do PHP no lado do servidor e a integração com banco de dados.

> Projeto de portfólio / aprendizado. Roda localmente com XAMPP.

---

## Funcionalidades

- **Cadastro** de usuários com vários campos (nome, idade, usuário, senha, CPF, e-mail, telefone, gênero, data de nascimento, estado e cidade).
- **Login** com sessão (`$_SESSION`) e área restrita.
- **Sistema** interno que lista todos os usuários em tabela.
- **Editar** e **excluir** registros (CRUD completo: Create, Read, Update, Delete).
- **Logout** encerrando a sessão.

## Tecnologias

- **PHP 8** (MySQLi)
- **MySQL / MariaDB**
- **HTML5** e **CSS3** (com fontes e layout personalizados)
- **XAMPP** (Apache + MySQL) para rodar localmente

## Boas práticas de segurança aplicadas

Este projeto começou como exercício e foi depois revisado para aplicar práticas
essenciais de segurança em PHP:

- **Prepared statements** (consultas preparadas) em todas as operações com o banco,
  eliminando o risco de **SQL Injection**.
- **Hash de senha** com `password_hash()` e verificação com `password_verify()` —
  as senhas nunca são armazenadas em texto puro.

### Pontos ainda em aberto (próximos aprendizados)

Para um ambiente de produção real ainda faltariam, por exemplo:
- Escapar a saída HTML (`htmlspecialchars`) para prevenir **XSS**.
- Proteção contra **CSRF** nos formulários.
- Separar as credenciais do banco em configuração fora do versionamento.

## Como rodar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/) e inicie **Apache** e **MySQL** no painel de controle.
2. Copie a pasta `banco de dados` para dentro de `C:\xampp\htdocs\` (sugestão: renomeie para `cadastros`, sem espaços).
3. Crie o banco de dados:
   - Acesse <http://localhost/phpmyadmin>
   - Aba **Importar** → selecione o arquivo [`banco de dados/banco.sql`](banco%20de%20dados/banco.sql) → **Executar**.
   - Isso cria o banco `samuel` e a tabela `cadastro`.
4. Acesse a aplicação em <http://localhost/cadastros/home.php>.

> As credenciais padrão de conexão (`config.php`) são as do XAMPP: usuário `root`, sem senha.

## Estrutura

```
banco de dados/
├── home.php          # Tela inicial (Login / Cadastre-se)
├── cadastro.php      # Formulário e gravação de novo usuário
├── login.php         # Formulário de login
├── testeLogin.php    # Validação do login (password_verify)
├── sistema.php       # Área restrita: lista os usuários
├── edit.php          # Formulário de edição
├── saveEdit.php      # Grava a edição
├── delete.php        # Exclui um usuário
├── sair.php          # Logout
├── config.php        # Conexão com o banco (MySQLi)
├── banco.sql         # Script de criação do banco e da tabela
└── css/              # Estilos, fontes e imagens
```
