<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/acoessociais.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Ações Sociais</title>
</head>

<body>

    <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>

    <br>

    <div class="container text-center">

        <div class="row">
            <div class="col">
                <h3 class="ong">ONGS associadas</h3>
                <hr>
            </div>
        </div>

        <!-- Contador da página: -->
        <div id="mensagem">Ajude-nos a fazer a diferença na vida das pessoas!</div>
        <div id="contador">0</div>

        <script>
            var mensagensMotivacionais = [
                "Cada doação faz um impacto positivo!",
                "Juntos, podemos mudar vidas!",
                "Sua contribuição faz a diferença no mundo!",
                "Doar é um ato de amor e solidariedade.",
                "Ajude-nos a construir um futuro melhor para todos!",
                "Cada centavo conta para quem precisa!",
                "Sua doação cria oportunidades para aqueles que mais precisam."
            ];

            function getRandomMessage() {
                return mensagensMotivacionais[Math.floor(Math.random() * mensagensMotivacionais.length)];
            }

            function atualizarContador() {
                var contadorElemento = document.getElementById('contador');
                var mensagemElemento = document.getElementById('mensagem');

                var contadorAtual = parseInt(contadorElemento.innerText);
                var limite = 100;

                contadorAtual++;
                contadorElemento.innerText = contadorAtual;

                if (contadorAtual < limite) {
                    mensagemElemento.innerText = getRandomMessage();
                    setTimeout(atualizarContador, 100);
                } else {
                    mensagemElemento.innerText = "Obrigado por fazer a diferença!";
                }
            }

            atualizarContador();
        </script>

        <div class="row">
            <div class="col">
                <p class="ongass">
                    Nessa página, temos cards que falam sobre as ONGs que ajudamos. Com sua compra, além de garantir sua 
                    belíssima flor, você também contribui para um mundo melhor e maus limpo. Cada uma dessas ONGs foram 
                    escolhidas a dedo para que estivesses condizentes com nossos ideais e pensamentos, saiba um pouco mais 
                    sobre cada uma!
                </p>
                <br>
            </div>
        </div>

        <!-- Link para encontar as ongs: -->
        <div class="container__ongs">
            <div class="row">
                <div class="col card__ong">
                    <div class="card">
                        <img src="img/img_AcoesSociais/ong1.jfif" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SOS Amazonia</h5>
                            <a id="ongbtn" href="https://sosamazonia.org.br/" class="btn btn-primary">+</a>
                        </div>
                    </div>
                </div>
                <div class="col card__ong">
                    <div class="card">
                        <img src="img/img_AcoesSociais/ong2.jfif" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desengarrafando mentes</h5>
                            <a id="ongbtn" href="https://desengarrafandomentes.wordpress.com" class="btn btn-primary">+</a>
                        </div>
                    </div>
                </div>
                <div class="col card__ong">
                    <div class="card">
                        <img src="img/img_AcoesSociais/ong3.jfif" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ibirapuera conservação</h5>
                            <a id="ongbtn" href="https://www.atados.com.br/ong/ibiraconservacao" class="btn btn-primary">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <hr>

    <!-- Footer da página: -->
    <?php include("footer.php"); ?>

</body>

</html>