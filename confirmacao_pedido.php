<?php
session_start();
include 'functions/conexao.php'; 

    // Verifica se o usuário está autenticado
    if (
        !isset($_SESSION['id']) || empty($_SESSION['id']) ||
        !isset($_SESSION['nome']) || empty($_SESSION['nome'])
    ) {
        // Redireciona para a página de erro
        header("Location: admin/erro.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Importa um arquivo de estilo personalizado -->
    <link rel="stylesheet" href="CSS/pedido.css">
    <!-- Define o título da página como "Confirmação de Pedido" -->
    <title>Confirmação de Pedido</title>
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
            <div class="container text-center">
                <h3>Confirmação de Pedido</h3>

                <p>Obrigado por fazer seu pedido conosco. Seu pedido foi recebido com sucesso.</p>
                <p>Para mais informações sobre o status do seu pedido aperte em continuar</p>
                <!-- botão -->
                <a href="endereco_alternativo.php" type="submit" class="btn btn-primary">Continuar</a>
            </div>
                
            </div>
        </div>
    </div>

    <!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>

</html>