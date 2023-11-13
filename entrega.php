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
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Uso do Bootstrap: -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <!-- Título da página: -->
      <title>Acompanhar entrega</title>
  </head>

  <body>
    
    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>


        <!-- Exemplificando entrega de pedido: -->
        <div class="row">
            <div class="col-3"> 
              &nbsp;
            </div>
            <div class="col"> 
                <div class="container text-center">
                    <br>
                    <h2> Acompanhe seu pedido</h2>
                    <br>
                    <h4> Belo Mar agradece sua preferência. </h4>
                    <!-- Incorporando mapa: -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.258943585228!2d-46.478386924493805!3d-23.523187260191147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1695880234877!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <br><br>
                    <a class="btn btn-primary" href="nota.php">Meu pedido foi entregue</a>
                </div>
            </div>
            <div class="col-3"> 
              &nbsp;
            </div>
        </div>
        <br><br><hr>


      <!-- Footer da página: -->
      <?php include("footer.php"); ?>

  </body>
</html>