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
      <!-- Título principal -->
      <h2 class="h1">Flor Girassol</h2>
    </div>
    <br>
  </div>
  <!-- Outra linha com três colunas -->
  <div class="row">
    <div class="col">
      <!-- Espaço em branco -->
    </div>
    <div class="col">
      <!-- Parágrafo de texto sobre girassóis -->
      <p class="p">A flor do girassol tem uma característica instintiva conhecida por todo mundo, pois a planta se
        posiciona na direção do sol durante o dia todo. Você sabia que a flor do girassol é um ícone dos movimentos
        ecológicos e a beleza dessa planta é comemorada no dia 1° de maio?</p>
    </div>
    <div class="col">
      <!-- Mais texto sobre girassóis -->
      <p class="p">O girassol simboliza a luz do sol, a vivacidade e a alegria, por isso você pode presentear uma pessoa
        com um buquê ou até mesmo com a planta em vaso. Na decoração, o girassol é muito utilizado em sala de estar,
        varanda, cozinha completa e jardins internos e externos.</p>
    </div>
    <div class="col">
      <!-- Espaço em branco -->
    </div>
  </div>
  <br>
  <!-- Conteúdo de produtos com cartões Bootstrap -->
  <div class="container text-center">
    <!-- Primeira linha de cartões -->
    <div class="row">
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/PÊNDULO DE GIRASSOL ENCANTADO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pêndulo de Girassol Encantato</h5>
            <p class="card-text">Por R$ 159,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/BUQUÊ PARTITURA GIRASSOL.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Buquê Partitura Girassol</h5>
            <p class="card-text">Por R$ 49,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/BUQUÊ DE 4 GIRASSÓIS TE ADORO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Buquê de 4 Girassol Te Adoro</h5>
            <p class="card-text">Por R$ 116,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/BUQUÊ DE GIRASSÓIS CLÁSSICO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Buquê de Girassol Clássico</h5>
            <p class="card-text"> Por R$ 490,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Mais linhas de cartões (repetição) -->
    <br>
    <div class="row">
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/FLORATTA DE GIRASSÓIS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">FLORATTA DE GIRASSÓIS</h5>
            <p class="card-text">Por R$ 490,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/GIRASSOL PLANTADO NO BOX GRAFISMO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Girassol Plantado no Box Grafismo</h5>
            <p class="card-text">Por R$ 129,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/SURPRESA DE GIRASSÓIS NO VASO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surpresa de Girassol no Vaso</h5>
            <p class="card-text">Por R$ 169,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/GIRASSOL NO BOX VOCÊ ME FAZ TÃO BEM....webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Girassol no Box Você me faz Tão Bem...</h5>
            <p class="card-text"> Por R$ 155,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Footer da página: -->
  <?php include("footer.php"); ?>
  
</body>

</html>