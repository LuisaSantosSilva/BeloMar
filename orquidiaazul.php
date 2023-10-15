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
  <title>Orquidea Azul</title>
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
      <h2 class="h1">Flor Orquidia</h2>
    </div>
    <br>
  </div>
  <!-- Outra linha com três colunas -->
  <div class="row">
    <div class="col">
      <!-- Espaço em branco -->
    </div>
    <div class="col">
      <!-- Parágrafo de texto sobre Orquidia Azul -->
      <p class="p">As Orquídeas são flores únicas e famosas por conta de sua beleza exótica e delicadeza. Em geral, elas
        representam amor, desejo, sedução virilidade, sexualidade e beleza feminina.</p>
    </div>
    <div class="col">
      <!-- Mais texto sobre Orquidia Azul-->
      <p class="p">Mas é válido lembrar que essa
        planta possui uma diversidade de cores e formatos. Por conta disso, os significados da Orquídea podem variar.
        Conhecer a simbologia de cada uma delas é muito importante</p>
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
          <img src="img/img_Significados/MINI ORQUÍDEA RARA E LINDT.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Orquidea Rara e Lindt</h5>
            <p class="card-text">Por R$ 149,90</p>
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
          <img src="img/img_Significados/MINI ORQUÍDEA CHUVA DE OURO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Orquidia chuva de Ouro</h5>
            <p class="card-text">Por R$ 89,90</p>
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
          <img src="img/img_Significados/MINI ORQUÍDEA RARA AMARELA.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Orquidea para Amarela</h5>
            <p class="card-text">Por R$ 99,90</p>
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
          <img src="img/img_Significados/MINI ORQUÍDEA RARA LILÁS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Orquidea para Lilás</h5>
            <p class="card-text">Por R$ 99,90</p>
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
          <img src="img/img_Significados/LINDAS PHALAENOPSIS PINK.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lindas Phalaenopsis Pink</h5>
            <p class="card-text">Por R$ 398,90</p>
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
          <img src="img/img_Significados/GLAMUROSAS ORQUÍDEAS AMARELAS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Glamurosas Orquidea Amarelas</h5>
            <p class="card-text">Por R$ 278,90</p>
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
          <img src="img/img_Significados/ORQUÍDEA AZUL NO BOX AZULEJO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">OrquideaAzul no BOx Azulejo</h5>
            <p class="card-text">Por R$ 349,90</p>
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
          <img src="img/img_Significados/ORQUÍDEA MILTONIA PLANTADA BRANCA.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Orquidea Miltonia Plantada Branca</h5>
            <p class="card-text">Por R$99,00</p>
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