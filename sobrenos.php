<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Uso do Bootstrap: -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <!-- link para chamar o CSS: -->
      <link rel="stylesheet" type="text/css" href="CSS/sobrenos.css">
      <!-- Título da página: -->
      <title>Sobre Nós</title>
  </head>

  <body>
        <!-- Navbar da página: -->
        <?php include("navbar.php"); ?>

        <!-- Carrossel de banners: -->
        <div class="row">
            <div class="col"> 
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/img_SobreNos/Carrossel1.png" class="d-block w-100" alt="Foto1">
                        </div>
                        <div class="carousel-item">
                          <img src="img/img_SobreNos/Carrossel2.png" class="d-block w-100" alt="Foto2">
                        </div>
                        <div class="carousel-item">
                          <img src="img/img_SobreNos/Carrossel3.png" class="d-block w-100" alt="Foto3">
                        </div>
                        <div class="carousel-item">
                          <img src="img/img_SobreNos/Carrossel4.png" class="d-block w-100" alt="Foto4">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- Breve resumo de quem somos: -->
        <div class="row">
            <div class="col-3"> 
              &nbsp;
            </div>
            <div class="col"> 
                <div class="container text-center">
                    <br>
                    <h2> Quem Somos?</h2>
                    <br>
                    <h4> Belo Mar </h4>

                  <div id="text">
                    <p>Somos alunos da ETEC Zona Leste, que tivemos a oportunidade de desenvolver um site com a temática floricultura,
                       com o objetivo de vender flores para todas as pessoas que desejam presentear alguém ou se presentear com uma 
                       flor e também com isso ajudar o meio ambiente. Nos chamamos Belo Mar, porque podemos fazer da sua vida um verdadeiro mar de rosas.
                       Que tem como diferencial o acompanhamento da entrega, classificação dos produtos e uma iniciativa que alia a beleza das flores 
                       e a beleza da natureza.  </p>
                      <br>
                  </div>
                </div>
            </div>
            <div class="col-3"> 
              &nbsp;
            </div>
        </div>


        <!-- Um pouco da nossa jornada em diário de bordo: -->
        <div id="DiariodeBordo">
          <div class="container text-center">
              <br>
              <div id="DiarioTitulo">
                  <h2>Diário de Bordo</h2>
                  <p>Nesse espaço, contaremos um pouco sobre a nossa cronologia, como foi o decorrer do projeto por meio de datas e acontecimentos.</p>
              </div>
            <!-- Algumas datas em forma de card: -->
            <div class="row">
                <div class="col"> 
                        <br>
                        <div class="card">
                            <div class="card-header">
                             12/09/2022
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Nesse dia os coordenadores foram até a nossa sala para que pudéssemos sortear 
                                o tema em que o nosso projeto seria baseado. Por sorte, fomos o primeiro grupo a tirar um “papelzinho”, 
                                pegamos pegamos floricultura. Ficamos felizes com esse tema e desde ai as ideias começaram a surgir!</li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                        <br>
                        <div class="card">
                            <div class="card-header">
                             16/09/2022
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Começamos as pesquisas a respeito de nossos temas com o auxílio do professor, 
                                buscamos por palavras chaves, procurando por ideias semelhantes as que nós tivemos. 
                                Achamos empresas e sites que serviram de inspiração para o Design do nosso projeto: 
                                Formato, fontes, estrutura, cores, wireframes e etc..</li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                        <br>
                        <div class="card" >
                            <div class="card-header">
                             22/09/2022
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Tivemos uma sessão da mentoria e nessa sessão desenvolvemos o design thinking, construindo mapas em grupo, 
                                organizando nossas ideias e solucionando para os possíveis problemas que poderiam surgir, 
                                em conjunto pensamos e escrevemos juntos. Foi um processo muito importante e inovador. </li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                    <br>
                    <div class="card">
                        <div class="card-header">
                         27/10/2022
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Apresentamos uma prévia de como seria nosso projeto para os professores, 
                            para que pudéssemos organizar nossas ideias de forma clara e de fácil entendimento. 
                            Compramos lembrancinhas para ser entregues no final da nossa apresentação, escolhemos sinuosamente e com carinho algo que nos representasse.</li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col"> 
                        <br>
                        <div class="card">
                            <div class="card-header">
                              28/07/2023
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"> Estavamos em processo de desenvolvimento sobre o funcionamento do site, seu diagrama, 
                                descrições e banco de dados.</li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                        <br>
                        <div class="card">
                            <div class="card-header">
                              31/07/2023
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Tivemos mudança de integrante no time, onde retificamos ainda mais o desenvolvimento do site e 
                                amadurecemos ideias.</li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                        <br>
                        <div class="card">
                            <div class="card-header">
                              15/09/2023
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Apresentamos o projeto e seu funcionamento para os professores para deixar tudo claro e vimos 
                                o que poderia precisar retificar.</li>
                            </ul>
                          </div>
                </div>
                <div class="col"> 
                    <br>
                    <div class="card">
                        <div class="card-header">
                          27/10/2023
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Apresentamos o site final para a IBM, e tivemos a conclusão desse trabalho que nos 
                            fez evoluirmos muito  em conhecimento e estudantes.</li>
                        </ul>
                    </div>
                </div>
              </div>
            <br><br>
          </div>
      </div>


      <!-- Título contatos: -->
      <div class="row">
          <div class="col"> 
              <div class="container text-center">
                  <br>
                  <h2>Contato</h2>
                  <h4>Quer entrar em contato conosco?</h4>
                  <br>
                  </div>
              </div>
          </div>
      </div>
      <!-- Atalho para página contatos: -->
      <div class="container text-center">
        <div class="row">
          <div class="col">
            &nbsp;
          </div>
          <div class="col-5">
            <div id="text">
              <p>Caso queira entrar em contato conosco ou olhar nossas redes sociais, 
                clique no botão abaixo, para que voê seja direcionado até lá,
                Tenha ótimas compras. </p>
            </div>
            <a href="https://www.instagram.com/nossobelomar_/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><button type="button" class="btn btn-outline-primary">Ver contatos</button></a>
            <br><br>
          </div>
          <div class="col">
            &nbsp;
          </div>
        </div>
      </div>
    

      <!-- Informações do time: -->
      <div id="Time"> 
          <hr> 
          <div id="textoTime">
            <div class="container text-center">
              <h2>Conheça Nosso Time</h2>
              <br>
              <div class="row">
                  <div class="col"> 
                      <img id="equipe" src="img/img_SobreNos/Revellin.jpg" width="200" height="200">
                      <br><br>
                      <h5> Revellin Mendes </h5>
                      <p> Desenvolvedora </p>
                      <br>
                  </div>

                  <div class="col">
                      <img id="equipe" src="img/img_SobreNos/Mariana.jpg" width="200" height="200">
                      <br><br>
                      <h5> Mariana Ocireu </h5>
                      <p> Desenvolvedora </p>
                      <br>
                  </div>
                  <div class="col">
                      <img id="equipe" src="img/img_SobreNos/Luisa.jpg" width="200" height="200">
                      <br><br>
                      <h5> Luisa Santos </h5>
                      <p> Desenvolvedora </p>
                      <br>
                  </div>
                  <div class="col">
                      <img id="equipe" src="img/img_SobreNos/Layara.jpg" width="200" height="200">
                      <br><br>
                      <h5> Layara Miranda </h5>
                      <p> Desenvolvedora </p>
                      <br>
                  </div>
                  <div class="col">
                      <img id="equipe" src="img/img_SobreNos/Nikolas.jpeg" width="200" height="200">
                      <br><br>
                      <h5> Nikolas Reinhardt </h5>
                      <p> Desenvolvedor </p>
                      <br>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer da página: -->
        <?php include("footer.php"); ?>

  </body>
</html>