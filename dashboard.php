<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){ ;?>
    <p id="erro"><?php $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";?></p> <?php
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="CSS/perfil.css">
    <title>Login</title>
</head>

<body>
    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>

    <div class="container-login">
        <!-- Container principal -->
        <div class="img-box">
            <!-- Cria uma caixa para a imagem -->
            <img src="img/img_Login/logo.jpeg">
            <!-- Insere uma imagem no elemento img -->
        </div>
        <div class="content-box">
            <!-- caixa de conteúdo -->
            <div class="form-box">
            <br>
            <div class="container text-center">
                <br><br>
                <h1>Bem vindo(a) <?php echo $_SESSION['nome']; ?>!</h1>
                <p>Ficamos muito felizes de te ter aqui conosco</p>
                <br>
                <a href="produtos.php"><button type="button" class="btn btn-success">Comprar</button></a>
                <a href="sair.php"><button type="button" class="btn btn-danger">Deslogar</button></a>
            </div>
            </div>
        </div>
    </div>
    
    <!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>

</html>