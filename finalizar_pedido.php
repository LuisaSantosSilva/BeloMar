<?php
session_start();
include 'functions/conexao.php';


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

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar informações do formulário
    $personalizar = $_POST['personalizar'];
    $cupom = $_POST['cupom'];

    // Atualizar a quantidade no banco de dados
    foreach ($_SESSION['carrinho'] as $id => $qtd) {
        $sqlUpdate = "UPDATE produtos SET qtd = qtd - $qtd WHERE id = $id";
        mysqli_query($conexao, $sqlUpdate);
    }

    // Limpar o carrinho
    $_SESSION['carrinho'] = array();

    // Redirecionar para a página de confirmação ou agradecimento
    header('Location: cartao.php');
    exit();
} else {
    // Se o formulário não foi enviado corretamente
    echo "Erro no envio do formulário.";
}
?>
