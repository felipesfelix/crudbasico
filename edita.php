<?php
    include "funcoes/conexao.php";
    session_start();
    include "funcoes/sessao.php";
    $codU = $_GET['codigo'];
    $atualizaU = "SELECT * from usuarios where codigo = $codU";
    $con = $mysqli->query($atualizaU) or die ($mysqli->error);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Editar</title>
</head>
<body>
    <header>
        <div>
            <h1>Edição de Usuário</h1>
        </div>
        <div>
            <a href="inicio.php">Início</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="consulta.php">Consulta</a>
            <a href="funcoes/crud.php?funcao=4">Sair</a>
        </div>
    </header>
    <main>
        <?php while ($dado = $con->fetch_array()){?>
        <form action="funcoes/crud.php?funcao=2" method="POST"> 
            <label>Código</label>
            <input type="text" name="codigo" value="<?php echo $dado["codigo"];?>" readonly>
            </br>
            <label>Usuário</label>
            <input type="text" name="usuario" value="<?php echo $dado["usuario"];?>">
            </br>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $dado["email"];?>">
            </br>
            <label>Senha</label>
            <input type="text" name="senha" value="<?php echo $dado["senha"];?>" >
            </br>
            <label>Repita a Senha</label>
            <input type="text" name="rsenha" value="<?php echo $dado["rsenha"];?>">
			</br>
            <input type="submit" name="confirmar" value="Atualizar">
        </form>
        <?php } ?>
    </main>
</body>
</html>