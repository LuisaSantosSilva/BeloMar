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


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];
$qtd = $_POST['qtd'];

//Inserindo os dados
$sql = "INSERT INTO `produtos`( `nome`, `preco`, `imagem`, `qtd`) VALUES ('$nome','$preco','$imagem','$qtd')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container text-center">
    <h4>Produto adicionado com sucesso!</h4>
    <div class="container text-center">
        <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
    </div>

</div>