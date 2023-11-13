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

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

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

    <div class="container" id="container">

        <h3>Formulário de cadastro</h3>

        <form action="_atualizar_produto.php" method="post">
            <?php 
            
            $sql = "SELECT * FROM `produtos` WHERE id = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id = $array['id'];
                $nome = $array['nome']; 
                $preco = $array['preco'];
                $imagem = $array['imagem'];
                $qtd = $array['qtd'];
                

            ?>
            <div class="form-group">
                <label>Número do produto</label>
                <input type="number" class="form-control" name="nome" value="<?php echo $nome?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id?>">
            </div>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome?>">
            </div>
            <div class="form-group">
                <label>Preço do produto</label>
                <input type="double" class="form-control" name="preco" value="<?php echo $preco?>">
            </div>
            <div class="form-group">
                <label>Imagem do produto</label>
                <input type="text" class="form-control" name="imagem" value="<?php echo $imagem?>">
            </div>
            <div class="form-group">
                <label>Quantidade do produto</label>
                <input type="number" class="form-control" name="qtd" value="<?php echo $qtd?>">
            </div>
            <div class="container text-center">
                <button type="submit" id="botao" class="btn btn-primary btn-sm">Atualizar</button>
            </div>
            <?php } ?>
        </form>
    </div>

</body>

</html>