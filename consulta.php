<?php
    include "funcoes/conexao.php";
    session_start();
    include "funcoes/sessao.php";

    $usuario =  $_SESSION['usuario'];
    $consulta = "SELECT * from usuarios";
    $con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <header>
        <div>
            <h1>Consulta de Usuários</h1>
            <h3>Olá, <?php echo $usuario; ?> </h3>
        </div>
        <div>
            <a href="inicio.php">Início</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="funcoes/crud.php?funcao=4">Sair</a>
        </div>
    </header>
    <main>
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=='cadastrado'){
                    echo'<spam>Usuário cadastrado com suscesso!</spam>';
                }
            }
        ?>
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=='atualizado'){
                    echo'<spam>Usuário alterado com suscesso!</spam>';
                }
            }
        ?>
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=='excluido'){
                    echo'<spam>Usuário excluido com suscesso!</spam>';
                }
            }
        ?>
        <table>
            <tr>
                <td>Código</td>
                <td>Usuário</td>
                <td>Senha</td>
                <td>Email</td>
                <td>Ação</td>
            </tr>
            <?php while ($dado = $con->fetch_array()){?>
            <tr>
                <td><?php echo $dado["codigo"];?></td>
                <td><?php echo $dado["usuario"];?></td>
                <td><?php echo $dado["senha"];?></td>
                <td><?php echo $dado["email"];?></td>
                <td>
                    <a  href="edita.php?codigo=<?php echo $dado["codigo"];?>">Editar</a>
                    <a  href="funcoes/crud.php?funcao=3&codigo=<?php echo $dado["codigo"];?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </main>
    <?php
        if(isset($_POST['status'])){
            if($_GET['status'] == "2"){
                echo'<spam>Usuário atualizado com sucesso!</spam>';
            }
        }
    ?>
</body>
</html>

