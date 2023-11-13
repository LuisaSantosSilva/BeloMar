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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Importa o arquivo CSS do Bootstrap para estilização -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
    <link rel="stylesheet" href="CSS/endereco.css">
    <!-- Importa um arquivo de estilo personalizado (style.css) -->
    <title>Endereço</title>
    <!-- Define o título da página como "Endereço" -->
</head>

<body>

    <div class="container-login">
        <!-- Container principal -->
        <!-- Caixa de imagem -->

        <!-- Caixa de conteúdo -->
        <div class="content-box">
            <!-- Caixa de formulário -->
            <div class="form-box">
                <h2>Confirmar Endereço de entrega 
                </h2>
                <form>
                <div class="input-box">
                        <span>Cep</span>
                        <input name="cep" type="cep" id="cep" value="" size="10" maxlength="9"
                            onblur="pesquisacep(this.value);">
                </div>
                <div class="input-box">
                        <span>Rua</span>
                        <input name="rua" type="text" id="rua">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-box">
                                <span>Nº</span>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-box">
                                <span>Complemento</span>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <span>Bairro</span>
                        <input name="bairro" type="bairro" id="bairro">
                    </div>
                    <div class="input-box">
                        <span>Cidade</span>
                        <input name="cidade" type="cidade" id="cidade">
                    </div>
                    <div class="input-box">
                        <span>Estado</span>
                        <input name="estado" type="estado" id="uf">
                    </div>
                    <br>
                    <!-- Botão de envio do formulário -->
                    <a class="btn btn-outline-secondary" href="entrega.php">Continuar</a>

                    <!--<div class="input-box">
                        <input type="submit" value="Entrar">
                    </div>-->
                    <!-- Link para inscrever-se -->
                </form>
                <!-- Fim do formulário -->
            </div>
        </div>
        <div class="img-box">
            <img src="img/img_Endereco/logo.jpeg">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="API/js.js"></script>
</body>

</html>