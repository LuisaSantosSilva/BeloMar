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
  <title>Margarida</title>
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
      <h2 class="h1">Flor Margarida</h2>
    </div>
    <br>
  </div>
  <!-- Outra linha com três colunas -->
  <div class="row">
    <div class="col">
      <!-- Espaço em branco -->
    </div>
    <div class="col">
      <!-- Parágrafo de texto sobre margarida -->
      <p class="p">A margarida é uma flor delicada e uma das mais conhecidas na hora de presentear. Além de ter várias
        opções de cores, com margarida amarela, vermelha ou branca, formando assim um lindíssimo buquê. As margaridas
        também são conhecidas como mal-me-quer, crisântemo, bem-me-quer, bonina, margarita, margarita-maior,
        mal-me-quer-bravo e olho-de-boi.</p>
    </div>
    <div class="col">
      <!-- Mais texto sobre margarida -->
      <p class="p">Como existem muitos tipos de margaridas,
        cada cor possui um significado específico.
        Uma sugestão é apostar em diferentes cores de margaridas para decorar o lar ou até mesmo presentar
        alguém. Ao dar a flor de margarida de presente para alguém especial, você está lhe prometendo amor fiel e
        verdadeiro, independentemente da cor da planta.</p>
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
          <img src="img/img_Significados/LUXUOSO MIX DE MARGARIDAS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Luxuoso Mix de Margaridas</h5>
            <p class="card-text">Por R$179,90</p>
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
          <img src="img/img_Significados/LUXUOSO MIX DE MARGARIDAS COLORIDAS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Luxuoso Mix de Margaridas Coloridas</h5>
            <p class="card-text">Por R$ 269,903</p>
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
          <img src="img/img_Significados/MARGARIDINHAS BRANCAS E FERRERO ROCHER.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Margardinhas Brancas e Ferrero Rocher</h5>
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
          <img src="img/img_Significados/LINDA MARGARIDINHA PLANTADA.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Linda Margardinha Plantada</h5>
            <p class="card-text">Por R$ 79,90</p>
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
          <img src="img/img_Significados/MINI VASO DE MARGARIDINHAS PLANTADAS.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Vaso de Margardinhas Plantadas</h5>
            <p class="card-text">Por R$ 79,90</p>
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
          <img src="img/img_Significados/MINI MARGARIDINHAS BRANCAS COM EMOJI CORAÇÃOZINHO.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mini Margardinhas Brancas com Emoji Coraçãozinho</h5>
            <p class="card-text">Por R$ 69,90</p>
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
          <img src="img/img_Significados/MARGARIDINHAS E BRIGADEIROS NO ENVELOPE.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Margardinhas e Brigadeiros no Envelope</h5>
            <p class="card-text">Por R$ 161,90</p>
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
          <img src="img/img_Significados/KIT DE MARGARIDINHAS AMARELAS HAPPY BIRTHDAY.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kit Margardinhas Amarelas Harry Birthday</h5>
            <p class="card-text">Por R$ 159,90</p>
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