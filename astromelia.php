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
  <title>Astromelia</title>
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
      <h2 class="h1">Flor Astromélia</h2>
    </div>
    </div>
    <br>
  </div>
  <!-- Outra linha com três colunas -->
  <div class="row">
    <div class="col-1">
      <!-- Espaço em branco -->
    </div>
    <div class="col">
      <!-- Parágrafo de texto sobre girassóis -->
      <p class="p">Como toda flor, o arranjo de astromélia possui um significado especial: Ela simboliza a amizade
        duradoura, respeito e carinho. Por isso, se você quiser presentear um amigo que está presente nos melhores
        momentos da sua vida, entregue um arranjo de astromélia para transmitir todos esses sentimentos. </p>
    </div>
    <div class="col">
      <!-- Mais texto sobre girassóis -->
      <p class="p">A astromélia possui seis pétalas. Cada uma representa uma característica importante: compreensão,
        humor, paciência, empatia, compromisso e respeito. Quando você entregar o arranjo de astromélia a alguém,
        escreva um bilhete explicando esse significado. O presente se torna ainda mais especial!</p>
    </div>
    <div class="col-1">
      <!-- Espaço em branco -->
    </div>
  </div>
  <br>
  <!-- Conteúdo de produtos com cartões Bootstrap -->
  <div class="container text-center">
    <!-- Primeira linha de cartões -->
    <div class="row">
      <?php foreach($products as $product) : ?>
          <?php if ($product['id'] >= 57 && $product['id'] <= 64) : ?>
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