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
    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/cartao.css">
</head>
<body>
<div class="container">
    <div class="card-container">
        <div class="front">
            <div class="image">
                <img src="img/chip.png" alt="">
                <h3 id="titulo_cartao">BeloMar</h3>
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>Titular do cartão</span>
                    <div class="card-holder-name">Nome completo</div>
                </div>
                <div class="box">
                    <span>Data de espiração</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">aa</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <h3 id="titulo_cartao">BeloMar</h3>
            </div>
        </div>
    </div>
    <form action="">
        <div class="inputBox">
            <span>Número do cartão</span>
            <input type="text" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>Titular do cartão</span>
            <input type="text" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>mês de expiração</span>
                <select name="" id="" class="month-input">
                    <option value="month" selected disabled>Mês</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Ano de expiração</span>
                <select name="" id="" class="year-input">
                    <option value="year" selected disabled>ano</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input">
            </div>
        </div>
        <br>
        <div class="text-legenda">
            <h6 id="legenda">Não insira aqui dados verdadeiros!!</h6>
        </div>
        <a href="confirmacao_pedido.php" type="submit" class="submit-btn">Enviar</a>
    </form>
</div>    
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="API/cartao.js"></script>
</body>
</html>


