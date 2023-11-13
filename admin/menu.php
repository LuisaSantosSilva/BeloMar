<?php
    // Inclui o arquivo de conexão com o banco de dados
    include 'conexao.php';

    // Inicia a sessão
    session_start();

    // Verifica se o usuário está autenticado
    if (
        !isset($_SESSION['id']) || empty($_SESSION['id']) ||
        !isset($_SESSION['nome']) || empty($_SESSION['nome'])
    ) {
        // Redireciona para a página de erro
        header("Location: erro.php");
        exit();
    }

    // Verifica se o ID é 1 e o nome é "Gerente"
    if ($_SESSION['id'] != 1 || $_SESSION['nome'] != 'Gerente') {
        // Redireciona para a página de erro
        header("Location: erro.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="pt-en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/menu.css">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand">BeloMar</a>
        </div>              
    </nav>

    <!-- Menu controle de Estoque: -->
    <div class="container text-center">
        <br><br>
        <div class="row">
            <div class="col-1">
            &nbsp;
            </div>
            <div class="col">
            <h3> Seja Bem Vindo(a) ao controle de estoque </h3>
            <hr><br>
            <!-- Adicionar Produto no banco: -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produto</h5>
                        <p class="card-text">Adicione novos produtos em seu estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-sm btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <div class="col-1">
            &nbsp;
            </div>
        </div>
        <br><br>

        <!-- Lista os Produtos para que o admin edite: -->
        <div class="row">
            <div class="col-1">
            &nbsp;
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-clipboard-list"></i>&nbsp;Lista de produtos</h5>
                        <p class="card-text">Edite, liste, adicione e exclua seus produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Listar produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-1">
            &nbsp;
            </div>
        </div>
    </div>
    
</body>
</html>