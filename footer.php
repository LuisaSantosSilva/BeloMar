<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/footer.css">
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
  <title>Footer</title>
</head>

<body>
  <footer><!--inicio do rodapé-->
      <div class="row">
          <pre></pre>
          <div class="col">
              <img src="img/img_Footer/logo.jpeg" width="250" height="250" id="ppq">
          </div>
          <div class="col">
            <br>
            <br>
            <p>Todos os direitos reservados para fins escolares &copy; </p>
            <div class="row">
              <a class="footer-link" href="produtos.php"> Produtos</a>
            </div>
            <div class="row">
              <a class="footer-link" href="alergias.php">Alergias</a>
            </div>
            <div class="row">
              <a class="footer-link" href="sobrenos.php">Sobre nós</a>
            </div>
            <div class="row">
              <a class="footer-link" href="acoessociais.php">Ações Sociais</a>
            </div>
            <div class="row">
              <a class="footer-link" href="login.php">Cadastre-se em nosso site!</a>
            </div>
          </div>
      </div>
      <a>Realização: Luisa - Revellin - Mariana - Layara - Nickolas </a>
  </footer><!--fim do rodapé-->

    <!--API de Libras --> 
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>
