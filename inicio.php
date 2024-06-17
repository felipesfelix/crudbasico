<?php
	include "funcoes/conexao.php";
    session_start();
    include "funcoes/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <div>
            <h1>Tela Incial</h1>
            <h3>Olá, Seja Bem-vindo <?php echo $usuario; ?> </h3>
        </div>
        <div>
            <a href="cadastro.php?">Cadastro</a>
            <a href="consulta.php?">Consulta</a>
            <a href="funcoes/crud.php?funcao=4">Sair</a>
        </div>
    </header>
</body>
</html>