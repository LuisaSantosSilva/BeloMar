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
    <!-- Define o título da página como "Resumo do pedido" -->
    <title>Resumo do pedido</title>
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
            <form action="finalizar_pedido.php" method="post">
                    <?php
                    // Verificar se o carrinho está vazio
                    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
                        // Inicializar o total como 0
                        $total = 0.0;

                        // Exibir resumo do pedido
                        foreach ($_SESSION['carrinho'] as $id => $qtd) {
                            $sql = "SELECT * FROM produtos WHERE id = '{$id}'";
                            $result_set = mysqli_query($conexao, $sql);
                            $row = mysqli_fetch_array($result_set);

                            $nome = $row['nome'];
                            $preco = (float)$row['preco'];
                            $calcSub = $preco * $qtd;
                            $sub = number_format($calcSub, '2', ',', '.');
                            
                            // Acumular o subtotal ao total
                            $total += $calcSub; 

                            // Exibir detalhes do pedido, como nome do produto, quantidade, preço, subtotal, etc.?>
                            <h2> Resumo do seu Pedido: </h2>
                            <p>Produto: <?php echo $nome ;?> | Quantidade: <?php echo $qtd ;?> | Subtotal: R$ <?php echo $sub ;?></p>
                       <?php }

                        // Verificar se há desconto a ser aplicado
                        if (isset($_POST['cupom']) && $_POST['cupom'] === '123') {
                            // Aplicar desconto de 10%
                            $desconto = $total * 0.1;
                            $total -= $desconto;

                            // Exibir o desconto ?>
                            <p>Desconto (cupom 123): R$ <?php echo $desconto ?></p>
                        <?php }else{
                            echo"Nenhum cupom";
                        }

                        $personalizar = $_POST['personalizar'];?>
                        <p>Embrulho: <?php echo $personalizar ;?> </p>

                       <!-- Exibir o total do pedido após aplicar desconto -->
                        <p>Total do Pedido: R$ <?php echo $total;?></p>
                        
                        <input type="submit" class="btn btn-primary" value="Finalizar Pedido">

                    <?php } else {
                        // Carrinho vazio
                        echo "Carrinho Vazio.";
                    }
                    ?>
                    <br>
                </form>
                <!-- Fim do formulário -->
            </div>
        </div>
    </div>

    <!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>

</html>