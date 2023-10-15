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
  <title>Lírio Rosa</title>
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
      <h2 class="h1">Flor Lírio</h2>
    </div>
    <br>
  </div>
  <!-- Outra linha com três colunas -->
  <div class="row">
    <div class="col">
      <!-- Espaço em branco -->
    </div>
    <div class="col">
      <!-- Parágrafo de texto sobre lirio rosa -->
      <p class="p">
        Se você quer saber o significado dos lírios na coroa de flores, elas são indicadas para velórios de senhoras,
        principalmente para envio por empresas em nome dos colegas de trabalho.
        O lírio pertence à família Liliaceae. Pode ter diversos significados, alguns deles são: pureza, beleza, doçura,
        sorte, além de poder significar a inocência, zelo, nobreza e discrição.</p>
    </div>
    <div class="col">
      <!-- Mais texto sobre lirio rosa -->
      <p class="p"> Em especial, o significado do lírio
        lilás ou roxo, representa os sentimentos positivos, matrimônio, a maternidade. Uma característica dessa flor é
        que ela possui um aroma forte e adocicado.</p>
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
          <img src="img/img_Significados/SURPRESA DE LÍRIOS COLORIDOS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Supresa de Lírios Coloridos</h5>
            <p class="card-text">Por R$ 249,90</p>
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
          <img src="img/img_Significados/SURPRESA DE LÍRIOS BRANCOS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Supresa de Lírios Brancos</h5>
            <p class="card-text">Por R$ 265,90</p>
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
          <img src="img/img_Significados/LUXUOSOS LÍRIOS COR-DE-ROSA.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Luxuosos Lírios Cor-de-Rosa</h5>
            <p class="card-text">Por R$ 389,90</p>
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
          <img src="img/img_Significados/LÍRIO BRANCO PLANTADO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Lírios Brancos Plantado</h5>
            <p class="card-text">Por R$ 265,90</p>
            <!-- Botão para abrir um modal (janela pop-up) -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Compre agora
            </button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Mais linhas de cartões (repetição) -->
    <div class="row">
      <div class="col">
        <!-- Cartão com informações de produto -->
        <div class="card">
          <img src="img/img_Significados/CESTA DE MARGARIDAS E LÍRIOS PINK.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cesta de Margaridas e Lírios Pink</h5>
            <p class="card-text">Por R$ 288,80</p>
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
          <img src="img/img_Significados/JARDIM DE LÍRIOS AMARELOS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jardin de Lírios Amarelos</h5>
            <p class="card-text">Por R$ 558,90</p>
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
          <img src="img/img_Significados/LUXUOSOS LÍRIOS COR-DE-ROSA.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Luxuosos Lírios Cor-de-Rosa</h5>
            <p class="card-text">Por R$ 389,90</p>
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
          <img src="img/img_Significados/LÍRIO BRANCO PLANTADO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Supresa de Lírios Brancos </h5>
            <p class="card-text">Por R$ 265,90</p>
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