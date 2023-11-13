<?php 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importa o arquivo CSS do Bootstrap para estilização -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <!-- Importa um arquivo de estilo personalizado -->
  <link rel="stylesheet" href="CSS/significados.css">
  <!-- Define o título da página como "Cadastro" -->
  <title>Girassol</title>
</head>

<body>

  <!-- Navbar da página: -->
  <?php include("navbar.php"); ?>

  <!-- Conteúdo principal -->
  <br>
  <!-- Uma linha com três colunas -->
    <div class="row">
      <div class="col">
      <div class="container text-center">
        <!-- Título principal -->
        <h2 class="h1">Flor Girassol</h2>
      </div>
      </div>
    <div>
      <br>
  
    <!-- Outra linha com três colunas -->
    <div class="row">
      <div class="col-1">
        <!-- Espaço em branco -->
        &nbsp;
      </div>
      <div class="col">
        <!-- Parágrafo de texto sobre girassóis -->
        <p>A flor do girassol tem uma característica instintiva conhecida por todo mundo, pois a planta se
          posiciona na direção do sol durante o dia todo. Você sabia que a flor do girassol é um ícone dos movimentos
          ecológicos e a beleza dessa planta é comemorada no dia 1° de maio?</p>
      </div>
      <div class="col">
        <!-- Mais texto sobre girassóis -->
        <p>O girassol simboliza a luz do sol, a vivacidade e a alegria, por isso você pode presentear uma pessoa
          com um buquê ou até mesmo com a planta em vaso. Na decoração, o girassol é muito utilizado em sala de estar,
          varanda, cozinha completa e jardins internos e externos.</p>
      </div>
      <div class="col-1">
        <!-- Espaço em branco -->
        &nbsp;
      </div>
    </div>
    <br>
    <!-- Conteúdo de produtos com cartões Bootstrap -->
    <div class="container text-center">
      <div class="row">
      
      <?php foreach($products as $product) : ?>
        <?php if ($product['id'] >= 17 && $product['id'] <= 24) : ?>
          <div class="col">
                    <div class="cardmari card">
                      <div class="card-body">
                  <!--classe ligada com o css para o sombreamento dos cards de compra-->
                      <img src="img/img_Significados/<?php echo $product['imagem']; ?>" class="card-img-top" /> <br>
                            <h5 class="card-title"><?php echo $product['nome']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Por R$<?php echo number_format($product['preco'], 2, ',', '.'); ?>
                            </h6>

                            <?php if($product['qtd'] < 1){ 
                              echo "Esse produto não está disponível no momento";
                            }else { ;?>
                              <?php
                                if (isset($_SESSION['id'])) {;
                                  // Se estiver logado, exibir o botão de compra ?>
                                  <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id']; ?>" class="card-link">Adicionar ao Carrinho</a>
                              <?php } else {
                                  // Se não estiver logado, redirecionar para a página de login
                                  echo"Faça seu Login e tenha ótimas compras";
                              }
                            } ;?>
                    </div><!-- card body-->
                  </div><!-- card -->
                </div><!-- col -->    
        <?php endif; ?>
      <?php endforeach; ?>
                            


      </div>
    </div>

  <br>

 <!-- Footer da página: -->
  <?php include("footer.php"); ?>
  
</body>

</html>