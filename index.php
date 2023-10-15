<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Uso do Bootstrap: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
     <!-- link para chamar o CSS: -->
     <link rel="stylesheet" type="text/css" href="CSS/index.css">
     <!-- Título da página: -->
    <title>Home</title>
</head>

<body>
    
    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>
   
   <div class="row">
       <div class="col">
           <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="img/img_Index/3.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="img/img_Index/2.png" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="img/img_Index/1.png" class="d-block w-100" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                   data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                   data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
       </div>
   </div>
   
   <br>

   <div class="container text-center">
       <div class="row">
          <p id="h3">BeloMar</h3> 
           <div class="col">
               <p class="mar">Bem-vindo à "BeloMar"! Em nosso projeto estudantil de floricultura fictícia, mergulhamos em um mundo 
                   de beleza floral e criatividade botânica, trazendo a tecnologia e a inovação. Nossa missão foi desenvolver esse site,
                    implementando front e back end, e com isso trazer à vida um espaço onde a magia das flores floresce em todos os sentidos. 
                    Explore nosso site, onde cada página contém um pedaço de nossa criatividade e dedicação. Nossa paixão pelo mundo das 
                    flores e da tecnologia é o coração deste projeto, e estamos ansiosos para compartilhar com você a nossa visão de um 
                    mundo repleto de cores, fragrâncias e alegria. Junte-se a nós nesta jornada floral única onde cada pétala é uma 
                    história esperando para ser contada. Descubra a magia que as flores podem criar em suas vidas!</p>
               </div>
       </div>
       </div>
       
<br>

       <div class="container text-center" id="HomeBody">
           <h3>Significados</h3>
           <div class="row">
               <div class="col">
                   <img src="img/img_Index/sign1.png" width="250" height="400" id="ppd">
                   <br><hr>
               </div>
               <div class="col">
                   <img src="img/img_Index/sign2.png" width="250" height="400" id="ppd">
                   <br><hr>
               </div>
           </div>
           <br>
           <div class="row">
               <div class="col">
                   <img src="img/img_Index/sign3.png" width="250" height="400" id="ppd">
                   <br><hr>
               </div>
               <div class="col">
                   <img src="img/img_Index/sign4.png" width="250" height="400" id="ppd">
                   <br><hr>
               </div>
           </div>
           <br>
           <div class="row">
               <div class="col text-center">
                   <h4>Conheça mais dos nossos significados!</h4>
                   <p>Caso queira conhecer mais significados vá para barra de navegação</p>
               </div>
           </div>
       </div>
       <br>
       <div class="container text-center" id="HomeBody2">
           <div class="row">
               <h4>ONGS que você pode ajudar comprando conosco:</h4>
               <div class="col">
                   <img src="img/img_Index/Ibirapuera.jfif" width="175" height="175" id="ppq">
                   <p>Ibirapuera Conservação</p>
               </div>
               <div class="col">
                   <img src="img/img_Index/DesengarrafandoM.jfif" width="175" height="175" id="ppq">
                   <p>Desengarrafando Mentes</p>
               </div>
               <div class="col">
                   <img src="img/img_Index/SOSAmazonia.webp" width="175" height="175" id="ppq">
                   <p>SOS Amazônia</p>
               </div>
           </div>
           
           <br>
       </div>
       
       <br>
       
       <!-- Footer da página: -->
       <?php include("footer.php"); ?>

</body>

</html>