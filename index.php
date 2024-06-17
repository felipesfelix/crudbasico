<?php
	include "funcoes/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
	<header>
         <h1>Login</h1>
    </header>
    <form method="post" action="funcoes/login.php">
		<label>Usuário</label>
		<input type="text" name="usuario" placeholder="Digite seu usuário">
		</br>
		<label>Senha</label>
		<input type="password" name="senha" placeholder="Digite sua senha">
		</br>
		<input type="submit" name="confirmar" value="Entrar">
		</br></br>

		<?php
		//confere se a senha esta correta
			if(isset($_GET['login'])){
				if($_GET['login']=='invalido'){
					echo'<spam>Nome do usuário ou Senha inválida</spam>';
				}
			}
		?>
		<?php
			//confere se o usuario saiu
			if(isset($_GET['login'])){
				if($_GET['login']=='saida'){
					echo'<spam>Logout realizado com susesso!</spam>';
				}
			}
		?>
		<?php
			//confere tentativas de entrar e informa para iniciar a sessão
			if(isset($_GET['login'])){
				if($_GET['login']=='restrito'){
					echo'<spam>Primeiramente, faça Login!</spam>';
				}
			}
		?>
	</form>
</body>
</html>