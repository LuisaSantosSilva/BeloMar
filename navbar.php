<?php
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0) {
      header("location: index.php");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/navbar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <title>Navbar</title>
</head>

<body>
    <!-- Navbar da página: -->
    <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand">BeloMar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Datas Comemorativas
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="diadosnamorados.php">Dia dos Namorados</a></li>
                                    <li><a class="dropdown-item" href="diadasaudade.php">Dia da Saudade</a></li>
                                    <li><a class="dropdown-item" href="diadabandeira.php">Dia da Bandeira</a></li>
                                    <li><a class="dropdown-item" href="diadagratidao.php">Dia da Gratidão</a></li>
                                    <li><a class="dropdown-item" href="diadaeducacao.php">Dia da Educação</a></li>
                                    <li><a class="dropdown-item" href="pascoa.php">Páscoa</a></li>
                                    <li><a class="dropdown-item" href="anonovo.php">Ano Novo</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Significados
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="girassol.php">Girassol</a></li>
                                    <li><a class="dropdown-item" href="margarida.php">Margarida</a></li>
                                    <li><a class="dropdown-item" href="rosavermelha.php">Rosa</a></li>
                                    <li><a class="dropdown-item" href="liriorosa.php">Lírio</a></li>
                                    <li><a class="dropdown-item" href="orquidiaazul.php">Orquidea</a></li>
                                    <li><a class="dropdown-item" href="astromelia.php">Astromelia</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="alergias.php">Alergias</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link " href="sobrenos.php">Sobre Nós</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="acoessociais.php">Ações Sociais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="produtos.php">Produtos</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="carrinho.php">Carrinho</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="dashboard.php">Perfil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</body>
</html>