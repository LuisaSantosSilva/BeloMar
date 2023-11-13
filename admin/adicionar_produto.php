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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <!-- Admin Cadstro do Formulário: -->
    <div class="container"  id="container">
    <br><br>
        <h3>Formulário de Cadastro do Produto</h3>

        <form action="_inserir_produto.php" method="post">
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do produto"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Preço do Produto</label>
                <input type="double" class="form-control" name="preco" placeholder="Insira o preço do produto"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>URL da imagem do produto</label>
                <input type="text" class="form-control" name="imagem" placeholder="Insira a imagem do produto"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtd" placeholder="Insira a quantidade disponível"
                    autocomplete="off">
            </div>
            <div class="container text-center">
                <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                <button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>