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

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];
$qtd = $_POST['qtd'];

$sql = "UPDATE `produtos` SET `nome`='$nome',`preco`='$preco',`imagem`= '$imagem',`qtd`= '$qtd' WHERE id = $id";
    
$atualiza = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container"></div>
<center>
    <div>
        <h3>Atualizado com sucesso!</h3>
    </div>
    <div>
        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Ir para lista de produtos</a>
    </div>
</center>