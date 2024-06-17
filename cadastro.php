<?php
    include "funcoes/conexao.php";
    session_start();
    include "funcoes/sessao.php";
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <div>
            <h1>Novo Usuário</h1>
            <h3>Olá, <?php echo $usuario; ?> </h3>
        </div>
        <div>
            <a href="inicio.php">Início</a>
            <a href="consulta.php">Consultar</a>
            <a href="funcoes/crud.php?funcao=4">Sair</a>
        </div>
    </header>
    <main>
        <form action="funcoes/crud.php?funcao=1" method="POST"> 
            </br>
            <label>Usuário</label>
            <input type="text" name="usuario" placeholder="Digite seu usuário" required>
            </br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" required>
            </br>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            </br>
            <label>Repita a Senha</label>
            <input type="password" name="rsenha" placeholder="Repita sua senha" required>
            </br>
            <input type="submit" name="confirmar" value="Cadastrar">
        </form>
    </main>
</body>
</html>