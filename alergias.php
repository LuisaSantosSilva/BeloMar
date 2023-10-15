<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Uso do Bootstrap: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- link para chamar o CSS: -->
    <link rel="stylesheet" type="text/css" href="CSS/alergias.css">
    <!-- Título da página: -->
    <title>Alergias</title>
</head>

<body>

    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>
    
    <br>
    
    <div class="container text-center">
        <div class="row">
            <h1>Alergias</h1>
            <div class="col">
              <p class="mar">A alergia ao pólen é uma condição comum que afeta muitas pessoas ao redor do mundo. Só no Brasil,
                estimasse que cerca de 70% da população tem alerigia a polen ou a relacionados.
                Também conhecida como rinite alérgica sazonal, é uma resposta do sistema imunológico a partículas
                microscópicas que são liberadas pelas plantas durante a polinização.
                </p>
            </div>
            <div class="col">
              <p class="mar">No dia 23 de setembro chega a Primavera, a estação mais florida do ano, e junto com ela a alergia ao
                pólen, uma das mais frequentes nesta época e cuja prevalência está aumentando, observando-se
                sensibilização já na infância. Cerca de 50% da população do sul do Brasil possui alergia a polen.
                A boa notícia é que existem diversas flores que podem ser usadas por pessoas alérgicas ao pólen, e nós da BeloMar temos algumas indicações!
                </p>
            </div>
        </div>
    </div>
    
    <hr>
    
    <div class="container text-center">
        <div class="row">
            <h3>Conheça flores que não dão alergia</h3>
            <div class="col" class="mar">
                Essas espécies podem ter um teor de pólen muito pequeno, ou ainda possuir um pólen pegajoso. Esse tipo
                de pólen não se espalha pelo ar, poupando você dos espirros característicos das crises alérgicas.
                Montamos com todo carinho e cuidado essa lista com as melhores opções para você!
            </div>
        </div>
    </div>
    
    <br>
    
    <hr>
    
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src="img/img_Alergias/alergia1.jpg" width="175" height="175" id="ppq">
                <p> Cravos </p>
            </div>
            <div class="col">
                <img src="img/img_Alergias/alergia2.jpg" width="175" height="175" id="ppq">
                <p> Girassóis </p>
            </div>
            <div class="col">
                <img src="img/img_Alergias/alergia3.jpg" width="175" height="175" id="ppq">
                <p> Orquídeas </p>
            </div>
        </div>
    </div>
    <br>
    
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src="img/img_Alergias/alergia4.jpg" width="175" height="175" id="ppq">
                <p> Lírios asiáticos </p>
            </div>
            <div class="col">
                <img src="img/img_Alergias/alergia5.jpg" width="175" height="175" id="ppq">
                <p> Hortênsias </p>
            </div>
            <div class="col">
                <img src="img/img_Alergias/alergia6.jpg" width="175" height="175" id="ppq">
                <p> Rosas </p>
            </div>
        </div>
    </div>
    
    <hr>
    <br>
    
    <!-- Footer da página: -->
    <?php include("footer.php"); ?>
    
</body>

</html>


