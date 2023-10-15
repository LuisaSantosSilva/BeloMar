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
  <title>Rosa Vermelha</title>
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
        <h2 class="h1">Flor Rosa</h2>
      </div>
      <br>
    </div>
    <!-- Outra linha com três colunas -->
    <div class="row">
      <div class="col">
        <!-- Espaço em branco -->
      </div>
      <div class="col">
        <!-- Parágrafo de texto sobre Rosa Vermelha -->
        <p class="p">
          A origem mais antiga do nome Rosa está calcada nos elementos germânicos hrod, que significa "fama", e heid,
          que quer dizer "espécie” ou “tipo". Dessa forma, o nome apresenta o primeiro significado de “tipo formoso” ou
          “espécie famosa”.</p>
      </div>
      <div class="col">
        <!-- Mais texto sobre Rosa Vermelha-->
        <p class="p"> Um nome que exala feminilidade, delicadeza e elegância, o nome Rosa apresenta duas possibilidades
          de origens
          etimológicas, na qual ambas fazem referência direta a uma das flores mais populares para cultivo desde a
          Antiguidade, a rosa.</p>
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
            <img src="img/img_Significados/BUQUÊ DE 6 ROSAS VERMELHAS.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buquê de 6 Rosas Vermelhas</h5>
              <p class="card-text">Por R$ 109,90</p>
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
            <img src="img/img_Significados/Rosa no Envelope Love.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rosa no Envelope Love</h5>
              <p class="card-text">Por R$ 230,90</p>
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
            <img src="img/img_Significados/PASSIONE DE ROSAS VERMELHAS.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Passione de Rosas Vermelhas</h5>
              <p class="card-text">Por R$ 298,90</p>
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
            <img src="img/img_Significados/CAIXA PREMIUM EU TE AMO.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Caixa Premium Eu Te Amo</h5>
              <p class="card-text">Por R$64,90</p>
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
            <img src="img/img_Significados/POEMA DE 24 ROSAS VERMELHAS.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Poema de 24 Rosas Vermelhas</h5>
              <p class="card-text">Por R$ 399,90</p>
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
            <img src="img/img_Significados/ARRANJO 3 LINDAS ROSAS VERMELHAS.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Arranjo 3 Lindas Rosos Vermelhas</h5>
              <p class="card-text">Por R$ 139,90</p>
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
            <img src="img/img_Significados/SENSACIONAL ROSA IMPORTADA VERMELHA.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sensacional Rosa Importada Vermelha</h5>
              <p class="card-text">Por R$ 44,90</p>
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
            <img src="img/img_Significados/BUQUÊ MAGNÍFICO DE ROSAS VERMELHAS.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buquê Magnífico de Rosas Vermelhas</h5>
              <p class="card-text">Por R$ 179,90</p>
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