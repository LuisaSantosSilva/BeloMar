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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/produtos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <title>Produtos</title>
</head>

<body>
  
  <!-- Navbar da página: -->
  <?php include("navbar.php"); ?>
  <!-- espaço entre a Navbar e os icones redondos-->
  <br>
  <!-- fileira dos icones redondos-->
  <div class="container text-center">
    <p class="titulosignifi">Significados:</p>
    <div class="row">
      <div class="col">
        <!-- imagens e titulo das imagens -->
        <a href="girassol.php"><img src="img/img_Produtos/gira.jpg" width="100" height="100"></a>
        <p>Girassol</p>
      </div>
      <div class="col">
        <a href="margarida.php"><img src="img/img_Produtos/margarida.webp"  width="100" height="100"></a>
        <p>Margarida</p>
      </div>
      <div class="col">
        <a href="rosavermelha.php"><img src="img/img_Produtos/rosa verm.jpg" width="100" height="100"></a>
        <p>Rosa</p>
      </div>
      <div class="col">
        <a href="liriorosa.php"><img src="img/img_Produtos/lirio.webp"  width="100" height="100"></a>
        <p>Lirio</p>
      </div>
      <div class="col">
        <a href="orquidiaazul.php"><img src="img/img_Produtos/orquidea-azul.jpg"  width="100" height="100"></a>
        <p>Orquidea</p>
      </div>
      <div class="col">
        <a href="astromelia.php"><img src="img/img_Produtos/astro.jpg" width="100" height="100"></a>
        <p>Astromelia</p>
      </div>
      <!--fim da coluna dos icones redondos-->
    </div>
    <!-- espaço entre os icones redondos e os cards de compra-->
    <br>

    <!--inicio da coluna dos cards de compra-->
      <div class="row">

        <?php foreach($products as $product) : ;?>

            <?php if ($product['id'] <= 16){ ;?>
              <div class="col">
                <!--classe ligada com o css para o sombreamento dos cards de compra-->
                <div class="cardmari card">
                  <div class="card-body">
                    <img src="img/img_Produtos/<?php echo $product['imagem']; ?>" class="card-img-top" /> <br>
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
              <?php } ;?>
                          
                        
                    </div><!-- card body-->
                </div><!-- card -->
              </div><!-- col -->      
			  <?php endforeach;?>

      </div>
  </div>

  <br>
<!-- Footer da página: -->
<?php include("footer.php"); ?>

</body>

</html>